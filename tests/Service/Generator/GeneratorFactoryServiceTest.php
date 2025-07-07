<?php declare(strict_types=1);
/**
 * Test case
 * This file is for runing tests
 * php version 8.1.17
 * 
 * @category Test
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
namespace App\Service\Generator;

use PHPUnit\Framework\TestCase;
use App\Service\Generator\GeneratorFactoryService;

/**
 * Generator factory test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
final class GeneratorFactoryServiceTest extends TestCase
{
    /**
     * Create
     * Tests create function
     * 
     * @return void
     */
    public function testCreate():  void
    {
        $factory = new GeneratorFactoryService(10);

        $generators = $factory->create();

        $this->assertCount(10, $generators);
        foreach ($generators as $generator) {
            $this->assertInstanceOf(GeneratorInterface::class, $generator);
        }
    }
}