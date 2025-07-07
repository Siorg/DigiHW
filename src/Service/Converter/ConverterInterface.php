<?php declare(strict_types=1);
/**
 * Converter interface
 * This file is for converters interface
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
 * Interface for converters
 * 
 * @category Interface
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
interface ConverterInterface
{
    /**
     * Generates either a string or an array of strings, 
     * depending on the implementation.
     *
     * @param string $input String to be converted
     * 
     * @return string The generated string or array of strings.
     */
    public function convert(string $input): string;
}