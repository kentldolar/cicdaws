#!/bin/bash

DIR="/var/www/html/cicdaws"
if [ -d "$DIR" ]; then
  # Take action if $DIR exists. #
  sudo chown -R root:apache /var/www/html/cicdaws
  sudo find /var/www/html/cicdaws -type d -exec chmod 750 {} \;
  sudo find /var/www/html/cicdaws -type f -exec chmod 640 {} \;
  sudo chmod -R 770 /var/www/html/cicdaws/storage/ /var/www/html/cicdaws/bootstrap/cache/
fi

