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
use App\Service\Converter\Rot13Converter;
use PHPUnit\Framework\TestCase;

/**
 * Rot13 converter test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class Rot13ConverterTest extends TestCase
{
    /**
     * Convert
     * Tests convert function
     * 
     * @return void
     */
    public function testConvert():  void
    {
        $converter = new Rot13Converter();

        $this->assertEquals('uryyb', $converter->convert('hello'));
        $this->assertEquals('HELLO', $converter->convert('URYYB'));
        $this->assertEquals(
            'nopqrstuvwxyzabcdefghijklm', 
            $converter->convert('abcdefghijklmnopqrstuvwxyz')
        );
        $this->assertEquals(
            'NOPQRSTUVWXYZABCDEFGHIJKLM', 
            $converter->convert('ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );
        $this->assertEquals('1234567890', $converter->convert('1234567890'));
        $this->assertEquals('', $converter->convert(''));
    }
}