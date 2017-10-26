#!/usr/bin/env bash

function init() {
    composer install --no-dev --optimize-autoloader
    [ "$?" != "0" ] && exit 1

    return 0
}
