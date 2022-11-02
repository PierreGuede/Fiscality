.PHONY: helpers
helpers:
	php artisan ide-helper:generate
	php artisan ide-helper:models -F helpers/ModelHelpers.php -M
	php artisan ide-helper:meta

.PHONY: analyse
analyse:
	./vendor/bin/phpstan analyse

.PHONY: lint
lint:
	./vendor/bin/pint
