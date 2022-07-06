#!/bin/bash
## This file is called when the Run button is clicked

# Define some variables
WP_CONFIG=wp-config.php
URL_REGEX="https:\/\/$REPL_SLUG.$REPL_OWNER.repl.co"
URL="https://$REPL_SLUG.$REPL_OWNER.repl.co"
SITE_NAME="Hello Blocks!"

# If there is no wp-config, we need to install WordPress.
if [[ ! -f $WP_CONFIG ]]; then
	echo "No wp-config.php. Need to install WordPress"
	source ./bin/install-wp.sh
fi;


# If WordPress is already installed, we may need to update HOME_URL and SITE URL to match the users sandbox.
if ! grep -q "$REPL_SLUG.$REPL_OWNER.repl.co" $WP_CONFIG; then
    echo "Updating the WordPress URLs."
		sed -i "/WP_HOME/s/'[^']*'/'$URL_REGEX'/2;/WP_SITEURL/s/'[^']*'/'$URL_REGEX'/2" $WP_CONFIG
fi

# Run any custom items by adding to the custom.sh file. 
source ./bin/custom.sh