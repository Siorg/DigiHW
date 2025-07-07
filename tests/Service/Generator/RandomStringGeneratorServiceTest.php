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
use App\Service\Generator\RandomStringGeneratorService;

/**
 * Random string generator test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
final class RandomStringGeneratorServiceTest extends TestCase
{
    /**
     * Generate
     * Tests generate function
     * 
     * @return void
     */
    public function testGenerate():  void
    {
        for ($length = 1; $length <= 20; $length++) {
            $generator = new RandomStringGeneratorService($length);

            $string = $generator->generate();

            $this->assertEquals($length, strlen($string));
            $this->assertMatchesRegularExpression("/^[a-zA-Z0-9]+$/", $string);
        }
    }
}