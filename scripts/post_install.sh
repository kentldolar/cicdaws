#!/bin/bash

DIR="/var/www/html/cicdaws"
if [ -d "$DIR" ]; then
  # Take action if $DIR exists. #
  FILE="/var/www/html/config/.env.development"
  if [ -a "$FILE" ]; then
  # Take action if $DIR exists. #
  cp /var/www/html/config/.env.development /var/www/html/cicdaws/.env.development
  fi
fi

