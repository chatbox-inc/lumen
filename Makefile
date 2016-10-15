server:
	php -S 0.0.0.0:8000 -t public
test:
	./vendor/bin/peridot backend/specs/tests.spec.php

