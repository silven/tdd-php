# TDD Workshop PHP

This small repository is to help you get started learning to do TDD. It contains code skeletons for the Triangle Classification exercise as well as the Roman Numerals exercise.

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

## Run tests
```
$ ./phpunit --bootstrap vendor/autoload.php tests/
PHPUnit 8.3.4 by Sebastian Bergmann and contributors.

..       2 / 2 (100%)

Time: 225 ms, Memory: 10.00 MB

OK (2 tests, 2 assertions)
```
