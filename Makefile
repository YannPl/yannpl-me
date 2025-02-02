init: check-env
	composer install
	npm install
	php artisan key:generate
	php artisan migrate:fresh
	php artisan db:seed
	php artisan ide-helper:generate
	npm run build

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

cs:
	php vendor/bin/pint

check-env:
	@grep -q '^APP_ENV=production' .env && echo "APP_ENV is set to production. Aborting init." && exit 1 || echo "APP_ENV is not production. Proceeding with init."
