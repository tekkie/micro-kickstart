FROM php:7.0-fpm

RUN  apt-get update \
  && apt-get install -y wget \
  && apt-get install -y locate \
#  && apt-get install -y zlib1g-dev \
#  && apt-get install -y zip unzip \
  && rm -rf /var/lib/apt/lists/*

RUN rm -rf /app/vendor

RUN wget --output-document=composer-setup.php https://getcomposer.org/installer
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '070854512ef404f16bac87071a6db9fd9721da1684cd4589b1196c3faf71b9a2682e2311b36a5079825e155ac7ce150d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --filename=composer  --install-dir=/usr/local/bin
RUN php -r "unlink('composer-setup.php');"
RUN chmod a+x /usr/local/bin/composer

RUN useradd -ms /bin/bash vagrant

USER vagrant

#RUN pwd
#RUN ls -lsa

WORKDIR /app

COPY php-fpm.conf /etc/php-fpm.conf

