#!/bin/bash
sudo docker run --name=php-server -d -v $PWD/www:/var/www/html php:apache
