FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get -y install mariadb-client
RUN apt-get -y install bash
RUN apt-get -y install	php7.3 php7.3-cli php7.3-fpm php7.3-opcache			\ 
						php7.3-mysqli wget curl php7.3-mysql	\
						php7.3-mbstring php7.3-xml php7.3-iconv php7.3-json		

COPY /conf/wp-config.php ./
COPY /wordpress.sh ./
COPY /conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN		curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
		chmod +x wp-cli.phar &&	\
		cp wp-cli.phar /usr/bin/wp 

EXPOSE 9000

ENTRYPOINT ["sh", "wordpress.sh"]

#CMD ["php-fpm"]
