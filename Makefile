install:
	docker run -u root -v ${PWD}:/app composer composer install && composer dump-autoload
std:
	php vendor/bin/phpcs --standard=PSR2 src/
test:
	php vendor/bin/phpunit