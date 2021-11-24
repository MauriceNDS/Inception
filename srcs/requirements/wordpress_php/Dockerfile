FROM    debian:buster

WORKDIR /var/www/html/wordpress

RUN     apt-get update \
        && apt-get upgrade -y \
        && apt-get install -y wget \
        && apt-get install -y curl \
        && apt-get install -y zsh \
        && apt-get install -y php php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi php-curl php-intl php-soap php-xmlrpc php-fpm php-mysql

RUN     wget https://wordpress.org/latest.tar.gz \
        && mkdir -p /var/www/html/wordpress \
        && tar xvf latest.tar.gz --strip-components=1 -C /var/www/html/wordpress \
        && chown -R www-data:www-data /var/www/html/wordpress

COPY    wp-config.php   .
COPY    start.sh        /

RUN	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
&&      chmod +x wp-cli.phar \
&&      mv wp-cli.phar /usr/local/bin/wp 

RUN     echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

RUN     mkdir -p /run/php

EXPOSE  9000

CMD     ["/bin/bash", "/start.sh"]
