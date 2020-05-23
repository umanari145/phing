FROM php:7.3-apache-stretch

ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN mkdir -p ${APACHE_DOCUMENT_ROOT} \
  && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
  && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
  ;

WORKDIR ${APACHE_DOCUMENT_ROOT}

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -sS https://getcomposer.org/installer \
  | php \
  && mv composer.phar /usr/bin/composer

RUN apt-get update && apt-get install -y zip unzip git graphviz

EXPOSE 80

USER root
