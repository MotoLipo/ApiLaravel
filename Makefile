.DEFAULT_GOAL := help

installStart: ## Инициализация прокета и запуск сервера
	composer install
	cp .env.example .env
	./vendor/bin/sail build
	./vendor/bin/sail up -d
	./vendor/bin/sail artisan key:generate

migrate: ## Миграция таблиц и запуск seed
	./vendor/bin/sail artisan migrate --seed

up: ## Запуск сервера
	./vendor/bin/sail up -d

down: ## Остановка сервера
	./vendor/bin/sail down


.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'