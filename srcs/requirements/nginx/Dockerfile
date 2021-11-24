FROM    debian:buster
COPY    nginx.conf  /etc/nginx/sites-available/

# RUN     apt-get update \
#         && apt-get upgrade -y \
#         && apt-get install -y nginx \
#         && ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/ \
#         && apt-get install -y php php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi php-curl php-intl php-soap php-xmlrpc php-fpm php-mysql \
#         && apt-get install -y openssl \
#         && mkdir /etc/nginx/ssl \
#         && chown -R www-data:www-data /var/www/html/wordpress \
#         && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/adel-sol.key \
#         -out /etc/nginx/ssl/adel-sol.pem -subj "/C=FR/ST=Lyon/L=Lyon/O=42 School/OU=adel-sol/CN=adel-sol.42.fr"
ARG	DOMAIN_NAME

RUN     apt-get update
RUN     apt-get upgrade -y
RUN     apt-get install -y nginx
RUN     apt-get install -y zsh
RUN     ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
RUN     apt-get install -y openssl
RUN     mkdir /etc/nginx/ssl
RUN     openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/adel-sol.key \
        -out /etc/nginx/ssl/adel-sol.pem -subj "/C=FR/ST=Lyon/L=Lyon/O=42 School/OU=adel-sol/CN=adel-sol.42.fr"
RUN     echo "127.0.0.1	$DOMAIN_NAME" >> /etc/hosts

EXPOSE  443

CMD ["nginx", "-g", "daemon off;"]
