# Generators app homework

# Task
With the help of symphony 6 dependency injection component and composer implement:

## Generators
* Random string generator(a-zA-Z0-9). Possibility to set random string length via dependency injection. Result example: afAs3d
* Array with random strings generator(a-zA-Z0-9). Possibility to set array size and string length via dependency injection. Result example: ['Av54sD', '123456', 'NN54sM']
## Converters
* Can convert string by the following pattern: Input: 22aAcd Output: 22/1/1/3/4
* Rot13 converter
### Create Generators collection.
### Add index.php and add random Generators to your Generators collection. Loop threw collection and apply random Converter to every Generator.
### Use PHPCodeSniffer, PHPStan and PHPUnit.

# Solution

Decided to use only symfony dependency injection component.

App uses two generators which implements generator interface. Array generator reuses string generator.

There is two converters implementing converter interface.
Daecided to implement custom rot13 converter instead of using built in function. 
For Alphanumeric converter there was unclear requirements, did my best to understand pattern.

As there was no requirements to output used simple unformated echo.

### To do:
- Parametrized run of index.php (add parameters for generators count / randomizing limits - currently it's just hardcoded)
- Integration tests

## Prerequisites 
* composer
* php >=8.1
```
composer install
```
## Run program
```
composer execute
```

## Code quality check
```
composer check
```

## Run separate checks
### PHPCodeSniffer 
```
composer phpcs
```
### PHPStan 
```
composer phpstan
```

## Testing
### PHPUnit 
```
composer test
```