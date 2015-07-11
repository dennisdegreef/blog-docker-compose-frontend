#!/usr/bin/env bash

cd /srv;

./composer.phar install

./app/console server:run

