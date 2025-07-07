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
 
 use App\Service\Generator\RandomStringGeneratorService;

/**
 * Random string array generator class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class RandomStringArrayGeneratorService implements GeneratorInterface
{
    private int $_size;
    private RandomStringGeneratorService $_randomStringGenerator;

    /**
     * Constructor 
     * 
     * @param $length Length of random string
     * @param $size   Size of result array
     */
    public function __construct(
        int $length,
        int $size,
    ) {
        $this->_randomStringGenerator = new RandomStringGeneratorService($length);
        $this->_size = $size;
    }

    /**
     * GenerateArray function
     * Generates random string array
     * 
     * @return array<string>
     */
    public function generate(): array
    {
        $randomStringsArray = [];
        for ($i = 0; $i < $this->_size; $i++) {
            $randomStringsArray[] = $this->_randomStringGenerator->generate();
        }
        return $randomStringsArray;
    }
}