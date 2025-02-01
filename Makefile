
make up:
	npm run dev

make test:
	php artisan test

make init:
	composer install
	npm install
	php artisan key:generate
	php artisan migrate:fresh
	php artisan db:seed
	php artisan ide-helper:generate
	npm run build
