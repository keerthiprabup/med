FROM debian:buster-slim

RUN apt-get update && apt-get install -y \
    apache2 \
    libapache2-mod-php \
    php \
    php-mysql \
    mariadb-server

RUN rm /var/www/html/index.html
COPY src/ /var/www/html/

COPY db.sql /root/db.sql
COPY entry.sh /entry.sh

ENTRYPOINT /entry.sh