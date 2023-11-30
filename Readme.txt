#### phpstan is usefull for check syntax and errors in php without run unit test.

Reference: https://phpstan.org/user-guide/getting-started


install:
``` composer
composer require --dev phpstan/phpstan
```

run to check:
```composer
vendor/bin/phpstan analyse .\buggy-code.php
```

with level "-l 6"
``` composer
vendor/bin/phpstan analyse -l 6 .\buggy-code.php
```

export errors:
``` composer
vendor/bin/phpstan analyse -l 6 .\buggy-code.php --generate-baseline
```