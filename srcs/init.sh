# giving nginx user-group rights over files
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# copy conf nginx file to the container and create a symlobic link to all the dirs he needs to be
cp /tmp/nginx.conf /etc/nginx/sites-available/nginx.conf
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf

# move the nginx index to a nginx folder
mkdir /var/www/html/nginx
mv /var/www/html/index.nginx-debian.html /var/www/html/nginx/

# create ssl certificate
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 \
		-x509 \
		-sha256 \
		-days 365 \
		-nodes \
		-out /etc/nginx/ssl/localhost.crt \
		-keyout /etc/nginx/ssl/localhost.key \
		-subj "/C=PT/ST=Lisbon/L=Lisbon/O=42Lisboa/OU=adolivei/CN=www.localhost.com"

service mysql start

# Configure a wordpress database
echo "CREATE DATABASE wordpress;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;"| mysql -u root --skip-password
echo "FLUSH PRIVILEGES;"| mysql -u root --skip-password
echo "update mysql.user set plugin='' where user='root';"| mysql -u root --skip-password

service mysql status

service php7.3-fpm start
service php7.3-fpm status

service nginx start
nginx -t
service nginx status

bash
