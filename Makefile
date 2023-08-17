install and start:
	composer install
	cp .env.example .env
	./vendor/bin/sail build
	./vendor/bin/sail up -d
	./vendor/bin/sail artisan key:generate

migrate:
	./vendor/bin/sail artisan migrate --seed

up:
	./vendor/bin/sail up -d

down:
	./vendor/bin/sail down