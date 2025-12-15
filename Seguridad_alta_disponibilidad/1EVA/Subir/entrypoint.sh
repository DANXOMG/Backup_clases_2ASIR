#!/usr/bin/env bash
set -e

mkdir -p /lab/work
cd /lab/work

# Generar certificado efímero (1 día de validez, sin passphrase)
openssl req -x509 -newkey rsa:2048 -keyout key.pem -out cert.pem -days 1 -nodes -subj "/CN=localhost"

# Arrancar servidor TLS en background
openssl s_server -key key.pem -cert cert.pem -accept 4433 > s_server.log 2>&1 &
echo $! > s_server.pid

echo "Servidor TLS arrancado en el puerto 4433 con PID $(cat s_server.pid)"

# Dejar bash interactivo para pruebas
exec /bin/bash
