#/bin/bash
set -ex
./phpunit --bootstrap vendor/autoload.php tests/ --whitelist src --coverage-html cov
