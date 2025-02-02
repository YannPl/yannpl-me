# .phony: init reset up test deploy pint larastan analyse not-in-production

# init the app for development
init: not-in-production
	composer install
	npm install
	npx husky init
	php artisan key:generate
	php artisan migrate:fresh
	php artisan db:seed
	php artisan ide-helper:generate
	npm run build

# Restart from scratch without changing the key
reset: not-in-production
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
	composer install --no-dev
	npm install
	php artisan migrate
	npm run build

pint:
	php vendor/bin/pint

larastan:
	php vendor/bin/phpstan

analyse: pint larastan

not-in-production:
	@grep -q '^APP_ENV=production' .env && echo "APP_ENV is set to production. Aborting init." && exit 1 || echo "APP_ENV is not production. Proceeding with init."
