#!/usr/bin/env bash

# Update repositories
apt-get update

# PHP tools
apt-get install php-xdebug
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/bin/phpunit
wget https://phar.phpunit.de/phpunit.phar

