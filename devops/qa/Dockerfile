FROM php:7.0-fpm

RUN  apt-get update \
  && apt-get install -y wget \
  && apt-get install -y locate \
#  && apt-get install -y zlib1g-dev \
#  && apt-get install -y zip unzip \

  && apt-get install -y libbz2-dev \
  && apt-get install -y bzip2 \
  && rm -rf /var/lib/apt/lists/*

# install composer
RUN wget --output-document=composer-setup.php https://getcomposer.org/installer
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '070854512ef404f16bac87071a6db9fd9721da1684cd4589b1196c3faf71b9a2682e2311b36a5079825e155ac7ce150d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --filename=composer  --install-dir=/usr/local/bin
RUN php -r "unlink('composer-setup.php');"
RUN chmod a+x /usr/local/bin/composer

# install phpunit
RUN wget https://phar.phpunit.de/phpunit.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit
RUN phpunit --version

# mess detector
RUN docker-php-ext-install bz2

RUN wget -c http://static.phpmd.org/php/latest/phpmd.phar
RUN chmod +x phpmd.phar
RUN mv phpmd.phar /usr/local/bin/phpmd
RUN phpmd --version

# copy-paste detector
RUN wget https://phar.phpunit.de/phpcpd.phar
RUN chmod +x phpcpd.phar
RUN mv phpcpd.phar /usr/local/bin/phpcpd
RUN phpcpd --version

# phpmetrics
RUN wget https://github.com/Halleck45/PhpMetrics/raw/master/build/phpmetrics.phar
RUN chmod +x phpmetrics.phar
RUN mv phpmetrics.phar /usr/local/bin/phpmetrics
RUN phpmetrics --version

RUN useradd -ms /bin/bash vagrant

USER vagrant

#RUN pwd
#RUN ls -lsa

WORKDIR /code
