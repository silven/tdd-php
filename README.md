# TDD Workshop PHP

This small repository is to help you get started learning to do TDD. It contains code skeletons for the Triangle Classification, Roman Numerals and Stack-implementation exercises.

## Triangle Classification
The task is to implement functionality to classify triangles. Triangles are either:
* Scalene, when all three sides are of different lengths.
* Isosceles, when two sides are the same length.
* Equilateral, when all three sides are of the same length.

## Roman Numerals
The task is to implement functionality to convert between decimal numerals and roman numerals.

```
Symbol	Value
I	1
V	5
X	10
L	50
C	100
D	500
M	1000
```

## Stack
A good example to use when learning the ZOMBIE-approach is data structures. The task here is to implement a FILO (first in, last out) stack. You can put things on the top of the stack, and you can remove things from the top of the stack.

## Setup

These examples requires PHP >= 7 and a working bash shell. Install dependencies by running `./composer.phar install` and generate an autoload file (so PHP can find our software under test) by running `./composer.phar dumpautoload`. You should then be able to run the tests by using the `./test.sh` utility script.

To be able to gather coverage information you need some sort of engine to gather that information, for example `xdebug`. Install it under ubuntu linux/wsl using `sudo apt install php-xdebug`.

## Run tests
```
$ ./phpunit --bootstrap vendor/autoload.php tests/ --whitelist src --coverage-html cov
PHPUnit 8.3.4 by Sebastian Bergmann and contributors.

..       2 / 2 (100%)

Time: 225 ms, Memory: 10.00 MB

OK (2 tests, 2 assertions)
```
