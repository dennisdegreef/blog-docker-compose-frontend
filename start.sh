#!/usr/bin/env bash

cd /srv/frontend;
/srv/frontend/composer.phar install && \
/srv/frontend/app/console server:run 0.0.0.0:8000

