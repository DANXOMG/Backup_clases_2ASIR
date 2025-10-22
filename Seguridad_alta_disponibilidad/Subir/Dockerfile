FROM ubuntu:24.04

RUN apt-get update && apt-get install -y \
    openssl wget ca-certificates procps python3 python3-pip curl \
    && apt-get clean

WORKDIR /lab

# Copiar AVML localmente
COPY avml /usr/local/bin/avml
RUN chmod +x /usr/local/bin/avml

# Copiar entrypoint
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 4433

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]