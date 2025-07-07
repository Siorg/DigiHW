<?php declare(strict_types=1);
/**
 * App entrance
 * This file is for runing app and iterate trough generators
 * php version 8.1.17
 * 
 * @category Public
 * @package  GenApp
 * @author   Lauris <i@laur.is>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://laur.is/
 */
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Service\Generator\GeneratorCollection;
use App\Service\Generator\GeneratorFactoryService;
use App\Service\Converter\RandomConverterService;

// Create a new instance of ContainerBuilder
$containerBuilder = new ContainerBuilder();

$containerBuilder->register('generator_factory', GeneratorFactoryService::class)
    ->addArgument(30); // How many generators we want

/**
 * Generators factory service
 *  
 * @var GeneratorFactoryService $factory 
 */    
$factory = $containerBuilder->get('generator_factory');

$containerBuilder->register('generator_collection', GeneratorCollection::class)
    ->addArgument($factory->create());

/** 
 * Generators collection 
 * 
 * @var GeneratorCollection $generatorCollection 
 */    
$generatorCollection = $containerBuilder->get('generator_collection');

$containerBuilder->register('converter', RandomConverterService::class);

/** 
 * Randomly selected converter
 * 
 * @var RandomConverterService $converter 
 */ 
$converter = $containerBuilder->get('converter');

foreach ($generatorCollection as $generator) {
    $randomValue = $generator->generate();
    if (is_array($randomValue)) {
        foreach ($randomValue as $value) {
            echo($converter->convert($value)."\n\r");
        }
    } else {
        echo($converter->convert($randomValue)."\n\r");
    }
}