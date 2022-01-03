include srcs/.env

PROJECT_NAME	= Inception

COMPOSE			= cd srcs && docker-compose


all: .up

build:
	$(COMPOSE) build

.up: clean 
	mkdir -p $(WP_HOST_VOLUME_PATH)
	mkdir -p $(MARIADB_HOST_VOLUME_PATH)
	$(COMPOSE) up -d --build

clean: 
	$(COMPOSE) down

fclean:
	$(COMPOSE) down -v

re: fclean all

prune: fclean
	docker system prune --volumes --all --force
	sudo rm -rf ~/data

.PHONY: build clean fclean all re .up