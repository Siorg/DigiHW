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
use App\Service\Generator\GeneratorCollection;
use App\Service\Generator\GeneratorInterface;

/**
 * Generator collection converter test class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
class GeneratorCollectionTest extends TestCase
{
    /**
     * GetIterator
     * Tests getIterator function
     * 
     * @return void
     */
    public function testGetIteratorReturnsTraversable(): void
    {
        $generator1 = $this->createMock(GeneratorInterface::class);
        $generator2 = $this->createMock(GeneratorInterface::class);
        $generators = [$generator1, $generator2];
        $collection = new GeneratorCollection($generators);
        
        $this->assertInstanceOf(Traversable::class, $collection->getIterator());
    }

    /**
     * Constructor
     * Tests constructor
     * 
     * @return void
     */
    public function testIteratorContainsGenerators(): void
    {
        $generator1 = $this->createMock(GeneratorInterface::class);
        $generator2 = $this->createMock(GeneratorInterface::class);
        $generators = [$generator1, $generator2];
        $collection = new GeneratorCollection($generators);
        
        foreach ($collection as $generator) {
            $this->assertInstanceOf(GeneratorInterface::class, $generator);
        }
    }
}