DOCKER=docker run -u root --rm
PHP_DOCKER=$(DOCKER) -v ${PWD}:/usr/src/myapp -w /usr/src/myapp php:7.3-cli
COMPOSER=$(DOCKER) -v ${PWD}:/app composer

install: ## Install dependencies
	$(COMPOSER) composer install && composer dump-autoload

std: ## Check code standard
	$(PHP_DOCKER) ./vendor/bin/phpcs --standard=PSR2 src/

test: ## PHPUnit Test
	$(PHP_DOCKER) ./vendor/bin/phpunit -v --colors=always

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
