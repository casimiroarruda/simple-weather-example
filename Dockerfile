FROM php:8.0-cli-alpine

WORKDIR /var/app

COPY weather.php /var/app/

RUN chmod +x /var/app/weather.php

ENTRYPOINT [ "/var/app/weather.php" ]