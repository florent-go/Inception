FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get -y install nginx openssl

COPY conf/default /etc/nginx/sites-available/default
COPY /nginx.sh ./

ENTRYPOINT [ "sh", "nginx.sh" ]

EXPOSE 443