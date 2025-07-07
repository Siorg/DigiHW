<?php declare(strict_types=1);
/**
 * Random string generator service
 * This file is for random string generator service
 * php version 8.1.17
 * 
 * @category Service
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */

 namespace App\Service\Generator;
 
/**
 * Random string generator class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class RandomStringGeneratorService implements GeneratorInterface
{
    private int $_length;

    /**
     * Constructor 
     * 
     * @param int $length Length of result string
     */
    public function __construct(int $length)
    {
        $this->_length = $length;
    }

    /**
     * Generate function
     * Generates random string
     * 
     * @return string
     */
    public function generate(): string
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        return substr(
            str_shuffle(str_repeat($chars, $this->_length)), 
            0, 
            $this->_length
        );
    }
}