PHP_DOCKER=docker run -u root --rm -v ${PWD}:/usr/src/myapp -w /usr/src/myapp php:7.3-fpm php
COMPOSER=docker run -u root --rm -v ${PWD}:/app composer
install:
	$(COMPOSER) composer install && composer dump-autoload
std:
	$(PHP_DOCKER) vendor/bin/phpcs --standard=PSR2 src/
test:
	$(PHP_DOCKER) vendor/bin/phpunit