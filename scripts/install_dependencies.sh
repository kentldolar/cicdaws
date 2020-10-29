#!/bin/bash
yum install -y httpd

DIR="/var/www/html/cicdaws"
if [ -d "$DIR" ]; then
  # Take action if $DIR exists. #
  rm -r /var/www/html/cicdaws
fi
