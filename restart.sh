#!/usr/bin/env bash

echo "nginx stop"
ssh root@172.16.10.33 "service nginx stop"
echo "php8.4-fpm restart"
ssh root@172.16.10.33 "service php8.4-fpm restart"
echo "nginx start"
ssh root@172.16.10.33 "service nginx start"
echo "Done!"
