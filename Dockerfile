FROM php:7.1-apache

RUN apt-get -y --force-yes update && apt-get -y --force-yes dist-upgrade

# Nos aseguramos de que el paquete esté disponible
RUN apt-get install --reinstall -y locales

# descomentamos la locale que vamos a utilizar
RUN sed -i 's/# es_MX.UTF-8 UTF-8/es_MX.UTF-8 UTF-8/' /etc/locale.gen

# Generamos la locale elegida
RUN locale-gen es_MX.UTF-8

# seteamos las environment variables
ENV LANG es_MX.UTF-8
ENV LANGUAGE es_MX
ENV LC_ALL es_MX.UTF-8

# Verificamos la configuración actualizada
RUN dpkg-reconfigure --frontend noninteractive locales

# Nos aseguramos que el mod_rewrite esté habilitado
RUN a2enmod rewrite

# Agregamos librerías útiles
RUN apt-get install -y libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-configure mcrypt \
    && docker-php-ext-install mcrypt

RUN apt install -y libicu-dev \
    && docker-php-ext-install -j$(nproc) intl

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN apt install -y libxml2-dev \
    && docker-php-ext-install xml


RUN apt-get install -y libcurl3-dev --fix-missing \
    && docker-php-ext-install curl

RUN docker-php-ext-install iconv mysqli mbstring pdo pdo_mysql tokenizer zip

# Setup Sendmail
RUN apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git &&\
    rm -rf /var/lib/apt/lists/*
RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.8.3.linux-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
ENV PATH /usr/local/go/bin:$PATH
RUN go get github.com/mailhog/mhsendmail
RUN cp /root/go/bin/mhsendmail /usr/bin/mhsendmail
RUN echo 'sendmail_path = /usr/bin/mhsendmail --smtp-addr mailhog:1025' > /usr/local/etc/php/php.ini
