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
use PHPUnit\Framework\TestCase;
use App\Service\Converter\AlphaNumberConverter;

/**
 * Alpha numeric converter test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
final class AlphaNumberConverterTest extends TestCase
{
    /**
     * Convert
     * Tests convert function
     * 
     * @return void
     */
    public function testConvert(): void
    {
        $converter = new AlphaNumberConverter();

        $this->assertSame('123', $converter->convert('123'));
        $this->assertSame('1/22/33/4', $converter->convert('1b2c3d'));
        $this->assertSame('22/1/1/3/4', $converter->convert('22aAcd'));
        $this->assertSame('1/22/33/4/25/26', $converter->convert('1b2c$3d&Yz'));
        $this->assertSame('', $converter->convert('&'));
    }
}