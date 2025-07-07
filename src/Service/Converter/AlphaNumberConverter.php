<?php declare(strict_types=1);
/**
 * Alpha to number converter
 * This file is for character to number conversion
 * php version 8.1.17
 * 
 * @category Converter
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
namespace App\Service\Converter;

/**
 * Converts string by alphabet number
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class AlphaNumberConverter implements ConverterInterface
{
    /**
     * Convert char to coresponding number with slash
     * 
     * @param string $input String to be encoded
     * 
     * @return string 
     */
    public function convert(string $input): string
    {
        $output = '';
        $length = strlen($input);

        for ($i = 0; $i < $length; $i++) {
            $char = $input[$i];

            switch (true) {
            case is_numeric($char):
                $output .= $char; // numeric character
                break;
            case ctype_upper($char):
                $output .= '/' . (ord($char) - 64); // uppercase letter
                break;
            case ctype_lower($char):
                $output .= '/' . (ord(strtoupper($char)) - 64); // lowercase letter
                break;
            default:
                $output .= ''; // non-alphanumeric character
            }
        }

        return $output;
    }
}