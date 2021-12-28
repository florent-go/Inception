#MYQSL
#service mysql start
#echo "CREATE DATABASE $MARIADB_DATABASE" | mysql -u root
#echo "CREATE USER '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PASSWORD';" | mysql -u root
#echo "GRANT ALL ON $MARIADB_DATABASE.* TO '$MARIADB_USER'@'%';" | mysql -u root
#echo "FLUSH PRIVILEGES;" | mysql -u root
#echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MARIADB_NEW_PWD';" | mysql -u root

sleep infinity
#chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
#chmod 1777 /var/run/mysqld /var/lib/mysql
#service mysql -p stop
#exec mysqld
