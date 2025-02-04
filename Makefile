# .PHONY: init reset up stop test deploy pint larastan analyse assets not-in-production

SAIL := ./vendor/bin/sail

## Show this help message
help:
	@awk '/^#/{c=substr($$0,3);next}c&&/^[[:alpha:]][[:alnum:]_-]+:/{print substr($$1,1,index($$1,":")),c}1{c=0}' $(MAKEFILE_LIST) | column -s: -t

## init the app for development
init: not-in-production
	$(SAIL) composer install
	$(SAIL) npm install
	npm run prepare
	$(SAIL) php artisan key:generate
	$(SAIL) php artisan migrate:fresh
	$(SAIL) php artisan db:seed
	$(SAIL) php artisan ide-helper:generate
	$(SAIL) npm run build

## Restart from scratch without changing the key (reset the database)
reset: not-in-production
	$(SAIL) composer install
	$(SAIL) npm install
	$(SAIL) php artisan migrate:fresh
	$(SAIL) php artisan db:seed
	$(SAIL) php artisan ide-helper:generate
	$(SAIL) npm run build

## Start the containers and watch for assets changes
up:
	$(SAIL) up -d
	$(SAIL) npm run dev

## Stop the containers
down:
	$(SAIL) stop

## Run the unit tests
test:
	$(SAIL) artisan test

test-init:
	$(SAIL)

## Run pint code style fixer
pint:
	$(SAIL) php vendor/bin/pint

## Run phpstan static analysis tool
larastan:
	$(SAIL) php vendor/bin/phpstan

## Run the static analysis tools
analyse: pint larastan

## Build the assets
assets:
	$(SAIL) npm run build

## Fail early if the app is in production
not-in-production:
	@grep -q '^APP_ENV=production' .env && echo "APP_ENV is set to production. Aborting init." && exit 1 || echo "APP_ENV is not production. Proceeding with init."

## Deploy the app
deploy:
	git pull
	composer install --no-dev
	npm install
	php artisan migrate
	npm run build
