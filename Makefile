# .phony: init reset up test deploy pint larastan check-env

# init the app for development
init: check-env
	composer install
	npm install
	npx husky init
	php artisan key:generate
	php artisan migrate:fresh
	php artisan db:seed
	php artisan ide-helper:generate
	npm run build

# Restart from scratch without changing the key
reset: check-env
	composer install
	npm install
	php artisan migrate:fresh
	php artisan db:seed
	php artisan ide-helper:generate
	npm run build

# Watch for changes
up:
	npm run dev

test:
	php artisan test

deploy:
	git pull
	composer install
	npm install
	php artisan migrate
	npm run build

pint:
	php vendor/bin/pint

larastan:
	php vendor/bin/phpstan

pre-commit: pint larastan

check-env:
	@grep -q '^APP_ENV=production' .env && echo "APP_ENV is set to production. Aborting init." && exit 1 || echo "APP_ENV is not production. Proceeding with init."
