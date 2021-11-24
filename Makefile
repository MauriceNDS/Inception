DATA		= /home/adelsol/data/*
P_DIR		= --project-directory ./srcs
ENV		= --env-file ./srcs/.env

all:
	mkdir -p /home/adelsol/data/db/
	mkdir -p /home/adelsol/data/wordpress/
	docker-compose ${P_DIR}  up -d

clean:
	docker-compose ${P_DIR}  down -v

fclean: clean

re: fclean all

.PHONY: all clean fclean re
