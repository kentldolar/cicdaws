#!/bin/bash
yum install -y httpd

DIR="/var/www/html/cicdaws"
if [ -d "$DIR" ]; then
  # Take action if $DIR exists. #
  rm -rf /var/www/html/cicdaws
fi
