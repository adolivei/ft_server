FROM debian:buster

#install nginx, mariadb, php, mysql and wget
RUN apt-get update &&  apt-get upgrade -y && apt-get install -y wget
RUN apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
RUN apt-get install -y nginx
RUN apt-get -y install mariadb-server

# phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz && \
	tar -xvzf phpMyAdmin-5.1.0-english.tar.gz && rm -rf phpMyAdmin-5.1.0-english.tar.gz && \
	mv phpMyAdmin-5.1.0-english var/www/html/phpmyadmin

# wordpress
RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xvzf latest.tar.gz && rm -rf latest.tar.gz && \
	mv wordpress var/www/html

COPY srcs/nginx.conf tmp/nginx.conf
COPY srcs/config.inc.php var/www/html/phpmyadmin
COPY srcs/wp-config.php var/www/html/wordpress

COPY ./srcs/init.sh ./

EXPOSE 80 433

CMD bash init.sh
