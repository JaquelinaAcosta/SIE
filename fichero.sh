#!/bin/bash

cd /var/www/html/siedpv/var

sudo chmod -R 777 logs
sudo chmod -R 777 cache
sudo chmod -R 777 sessions

sudo chown -R www-data:www-data logs
sudo chown -R www-data:www-data cache
sudo chown -R www-data:www-data sessions
