<?php declare(strict_types=1);
/**
 * Random converter service
 * This file is for service which randomly chooses converter
 * php version 8.1.17
 * 
 * @category Service
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
namespace App\Service\Converter;


use App\Service\Converter\Rot13Converter;
use App\Service\Converter\AlphaNumberConverter;

/**
 * Random converter class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class RandomConverterService
{
    /**
     * Array of converters 
     * 
     * @var array<ConverterInterface> $_converters
     */
    private $_converters = [];
    /**
     * Constructor 
     */
    public function __construct()
    {
        $this->_converters[] = new Rot13Converter();
        $this->_converters[] = new AlphaNumberConverter();
    }

    /**
     * Chooses random converter
     * 
     * @param string $input String to be encoded
     * 
     * @return string 
     */
    public function convert(string $input): string
    {
        $converter = $this->_converters[rand(0, 1)];
        return $converter->convert($input);
    }
}