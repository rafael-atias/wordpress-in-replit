#!/bin/bash
# This script handles downloading and installing WordPress
# This is a modified version of https://github.com/ethanpil/wordpress-on-replit/blob/master/install-wordpress-on-replit.sh

#Make sure we're in the right place!
cd ~/$REPL_SLUG

#Download Wordpress!
wp core download

#SQLITE Plugin: Download, extract and cleanup sqlite plugin for WP
curl -LG https://raw.githubusercontent.com/aaemnnosttv/wp-sqlite-db/master/src/db.php > ./wp-content/db.php

#Create dummy config to be overruled by sqlite plugin
wp config create --skip-check --dbname=wp --dbuser=wp --dbpass=pass --extra-php <<PHP
\$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define( 'WP_SITEURL', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define( 'FS_METHOD', 'direct' );
define( 'FORCE_SSL_ADMIN', true );
PHP

wp core install --url=$URL --title="$SITE_NAME" --admin_user=admin --admin_password=password --admin_email=info@example.com