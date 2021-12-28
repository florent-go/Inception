FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y mariadb-server
RUN apt-get install -y bash

COPY conf/50-server.cnf ./etc/mysql/mariadb.conf.d/50-server.cnf
COPY /sql.sh ./
EXPOSE 3306

ENTRYPOINT [ "sh", "sql.sh" ]

#CMD ["sql.sh"]