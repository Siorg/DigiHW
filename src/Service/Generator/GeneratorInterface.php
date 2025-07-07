<?php declare(strict_types=1);
/**
 * Random string generator interfafe
 * This file is for random string generator interface
 * php version 8.1.17
 * 
 * @category Generator
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */

 namespace App\Service\Generator;
 
/**
 * Random string|array generator interface
 * 
 * @category Interface
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
interface GeneratorInterface
{
    /**
     * Generates either a string or an array of strings, 
     * depending on the implementation.
     *
     * @return string|array<string> The generated string or array of strings.
     */
    public function generate(): string|array;
}