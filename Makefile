install:
	composer install
br-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
br-even:
	./bin/brain-even


