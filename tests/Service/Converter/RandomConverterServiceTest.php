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
use App\Service\Converter\RandomConverterService;
use PHPUnit\Framework\TestCase;

/**
 * Random converter test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class RandomConverterServiceTest extends TestCase
{
    /**
     * Convert
     * Tests convert function
     * 
     * @return void
     */
    public function testConvert():  void
    {
        $converterService = new RandomConverterService();

        $input = 'hello world';

        $result = $converterService->convert($input);

        // Ensure that the result is not empty
        $this->assertNotEmpty($result);

        // Ensure that the result is a string
        $this->assertIsString($result);
    }
}