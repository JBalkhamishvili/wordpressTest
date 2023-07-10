#!/bin/bash
set -euo pipefail

# wait for WordPress container to be ready
until $(wp core is-installed --allow-root --path=/var/www/html); do
    echo "Waiting for WordPress install..."
    sleep 5
done

# install and activate WP Engine plugin
wp plugin install wp-migrate-db --allow-root --path=/var/www/html --activate

# pull in data from WP Engine
# you will need to fill in the details of the following command
wp migratedb pull https://phpmyadmin.wpengine.com/ --allow-root --path=/var/www/html \
  --username=jumber.balkhamishvili@tipalti.com --password=Nemo22nemo@@
