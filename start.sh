#!/usr/bin/env bash

cd /srv;

composer install

./app/console server:run

