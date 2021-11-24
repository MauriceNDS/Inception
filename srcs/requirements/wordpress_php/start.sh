#!/bin/bash

sed -i -e "s/db_name/$DB_NAME/g" /var/www/html/wordpress/wp-config.php
sed -i -e "s/db_user/$DB_USER/g" /var/www/html/wordpress/wp-config.php
sed -i -e "s/db_password/$DB_PASSWORD/g" /var/www/html/wordpress/wp-config.php
sed -i -e "s/db_host/$DB_HOST/g" /var/www/html/wordpress/wp-config.php

if ! wp --allow-root core is-installed; then
	wp core install --url=$DOMAIN_NAME --title="Inception" --admin_user=$ROOT_PASSWORD --admin_password=$ROOT_PASSWORD --admin_email="root@example.com" --allow-root
	wp user create $DB_USER $USER_MAIL --role=author --user_pass=$DB_PASSWORD  --allow-root
fi

php-fpm7.3 -F
