<?php declare(strict_types=1);
/**
 * Rot13 converter
 * This file is for Rot13 encoder custom implementation
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
 * Custom Rot13 encoder class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class Rot13Converter implements ConverterInterface
{
    /**
     * Encode by Rot13 algorithm
     * 
     * @param string $input String to be encoded
     * 
     * @return string 
     */
    public function convert(string $input): string
    {
        $output = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (ctype_alpha($char)) {
                $ascii = ord($char);

                if (ctype_upper($char)) {
                    $ascii = (($ascii - 65 + 13) % 26) + 65;
                } else {
                    $ascii = (($ascii - 97 + 13) % 26) + 97;
                }

                $char = chr($ascii);
            }

            $output .= $char;
        }

        return $output;
    }
}