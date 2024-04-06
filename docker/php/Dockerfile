#docker/php/Dockerfile
FROM php:8.1-fpm

#FROM php:8.1

RUN apt-get update
#Install PHP extensions to access MySQL from the PHP source files 
RUN docker-php-ext-install pdo pdo_mysql mysqli

#RUN apt install auditd -y

COPY myphpSettings.conf /usr/local/etc/php-fpm.d/myphpSettings.conf
#COPY auditStart.sh /usr/local/apache2/auditStart.sh
