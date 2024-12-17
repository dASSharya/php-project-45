install:
	composer install
br-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin games
br-even:
	./bin/brain-even
br-calc:
	./bin/brain-calc
br-gcd:
	./bin/brain-gcd
