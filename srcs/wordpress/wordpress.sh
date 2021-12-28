#!/usr/bin/env bash

#WORDPRESS
wget https://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz
mv /wordpress/* /var/www/html/
rm -r /wordpress latest.tar.gz
mv wp-config.php var/www/html/
chown -R www-data:www-data /var/www/html

wp core install --allow-root --path="/var/www/html" --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN_USER	\
		--admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --skip-email

wp user create --allow-root --path="/var/www/html" --url=$WP_URL $WP_USER $WP_USER_EMAIL --role=author --user_pass=$WP_USER_PWD


exec "$@"
#sleep infinity