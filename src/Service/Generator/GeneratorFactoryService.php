<?php declare(strict_types=1);
/**
 * Random string generator factory
 * This file is for random string generator factory
 * php version 8.1.17
 * 
 * @category Generator
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */

 namespace App\Service\Generator;

use App\Service\Generator\RandomStringArrayGeneratorService;
use App\Service\Generator\RandomStringGeneratorService;
use App\Service\Generator\GeneratorInterface;

/**
 * Random string generator factory
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class GeneratorFactoryService
{
    private int $_count;
    /**
     * Constructor 
     * 
     * @param $count Count of random generators
     */
    public function __construct(int $count)
    {
        $this->_count = $count;
    }

    /**
     * Create generators function
     * Generates randomized string generators array
     * 
     * @return array<GeneratorInterface>
     */
    public function create(): array
    {
        $randomGenerators = [];
        for ($i = 0; $i < $this->_count; $i++) {
            $type = rand(0, 1);
            $size = rand(2, 10);
            $length = rand(5, 20);
            if ($type === 1) {
                $randomGenerators[] = new RandomStringArrayGeneratorService(
                    $length, 
                    $size
                );
            } else {
                $randomGenerators[] =  new RandomStringGeneratorService($length);
            }
            
        }
        return $randomGenerators;
    }
}