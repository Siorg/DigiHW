<?php declare(strict_types=1);
/**
 * Generators collection
 * This file is for random string generator collection
 * php version 8.1.17
 * 
 * @category Collection
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
namespace App\Service\Generator;

use IteratorAggregate;
use Traversable;
use App\Service\Generator\GeneratorInterface;

/**
 * Random string generators collection class
 * 
 * @category Class
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 * 
 * @implements \IteratorAggregate<GeneratorInterface>
 */
class GeneratorCollection implements IteratorAggregate
{
    /** 
     * Array of generators
     * 
     * @var array<GeneratorInterface> $_generators  
     */
    private array $_generators = [];

    /**
     * Constructor 
     * 
     * @param iterable<GeneratorInterface> $generators Generators array
     */    
    public function __construct(iterable $generators)
    {
        foreach ($generators as $generator) {
            $this->_generators[] = $generator;
        }
    }

    /**
     * Iterator functions
     * Gets iterator
     * 
     * @return Traversable<GeneratorInterface>
     */
    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->_generators);
    }
}