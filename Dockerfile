FROM nginx:latest

RUN apt-get update && apt-get install -qq curl \
        gnupg \
        php7.0-fpm \
        php7.0-mbstring \
        php7.0-dom \
        git \
        bzip2 \
        php7.0-zip \
        nodejs \
        php7.0-mysql

# Composer Install
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

EXPOSE 8081
