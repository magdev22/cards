init: docker-down-clean docker-up 

start: docker-down-clean docker-up

docker-build:
	docker-compose build

docker-up:
	docker-compose up -d

docker-down-clean:
	docker-compose down -v --remove-orphans


bash:
	docker-compose exec app bash

