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
use App\Service\Generator\RandomStringArrayGeneratorService;

/**
 * Random string array generator test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
final class RandomStringArrayGeneratorServiceTest extends TestCase
{
    /**
     * Generate
     * Tests generate function
     * 
     * @return void
     */
    public function testGenerate():  void
    {
        $generator = new RandomStringArrayGeneratorService(5, 10);

        $array = $generator->generate();

        $this->assertCount(10, $array);
        foreach ($array as $element) {
            $this->assertEquals(5, strlen($element));
        }
    }
}