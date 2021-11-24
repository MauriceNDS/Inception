FROM debian:buster

ARG     DB_NAME
ARG     DB_USER
ARG     DB_PASSWORD
ARG     DB_HOST
ARG     DOMAIN_NAME
ARG     DEBIAN_FRONTEND
ARG     ROOT_PASSWORD

COPY    start.sh        /srcs/

RUN     apt-get update
RUN     apt-get upgrade -y
RUN     apt-get install -y mariadb-server
RUN     apt-get install -y zsh

RUN	mkdir /var/run/mysqld && chown -R mysql:root /var/run/mysqld

COPY	50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

RUN     service mysql start \
&&    	mariadb -u root -e \
	"ALTER USER root@localhost IDENTIFIED WITH mysql_native_password; \
	ALTER USER root@localhost  IDENTIFIED BY '$ROOT_PASSWORD'; \
	CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD'; \
	CREATE DATABASE $DB_NAME; \
	GRANT ALL ON *.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD'; \
	FLUSH PRIVILEGES;"


EXPOSE  3306

CMD		["mysqld"]
