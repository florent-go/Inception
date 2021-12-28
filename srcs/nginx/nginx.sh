#SSL
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/server_pkey.pem -out /etc/ssl/certs/server.crt -subj "/C=FR/ST=Nice/L=Nice/O=42 School/OU=florent/CN=localhost"

nginx -g "daemon off;"