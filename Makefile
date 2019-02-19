DOCKER=docker run -u root --rm
DOCKER_KEEP=docker run -u root

PHP_DOCKER_IMAGE=php:7.3-cli
COMPOSER_DOCKER_IMAGE=composer
PHP_WEB_DOCKER_IMAGE=php:7.3-apache

PHP_CONTAINER=$(DOCKER) -v ${PWD}:/usr/src/myapp -w /usr/src/myapp $(PHP_DOCKER_IMAGE)
COMPOSER=$(DOCKER) -v ${PWD}:/app $(COMPOSER_DOCKER_IMAGE)
WEB_CONTAINER=$(DOCKER_KEEP) -v ${PWD}:/var/www/html -p 80:80 -d --name web_container $(PHP_WEB_DOCKER_IMAGE)

install: ## Install dependencies
	@$(COMPOSER) composer install && composer dump-autoload

code-std: ## Standardize the PHP code according to PSR2
	@$(PHP_CONTAINER) ./vendor/bin/phpcbf --colors --standard=PSR2 src/ tests/

code-chk: ## Check the PHP code according to PSR2
	@$(PHP_DOCKER) ./vendor/bin/phpcs --colors --standard=PSR2 src/ tests/

test: ## PHPUnit Test
	@$(PHP_DOCKER) ./vendor/bin/phpunit -v --colors=always

run: ## run the application
	@$(WEB_CONTAINER)

kill: ## stops the web container and deletes it
	@docker stop web_container && docker rm web_container

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
