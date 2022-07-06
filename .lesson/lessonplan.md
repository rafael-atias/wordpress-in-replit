
# Lesson Plabn

** Welcome to Hello Blocks! Coding a custom block SLS session! **

I have created this Repl to allow everyone to code long without having to worry about installing or configuring anything. You only need to press the Run button at the top of the page and you'll have a working WordPress site and all of the command line tools you'll need to follow along with me!

Due to some limitations of the Replit plaform, you will need to open the site in a separate tab to be able to login and access the WordPress admin. Look for the box with the arrow in the top right of the frame to pop out the page.

## Steps to get started
1. Press the Run button at the top of the page
2. Be sure to popout the browser window using the box with the arrow in the top right of the panel.
3. Add `/wp-login.php` to the end of your site URL to access the login page
4. Log in using the following credentails:
	* Username: admin
	* Password: password


## Lesson Overview

1. [The Block files](https://replit.com/@learnwp/Hello-Blocks#.lesson/block-files.md)
2. The @wordpress/scripts package
3. Dynamic Blocks
4. 

[Home](https://replit.com/@learnwp/Hello-Blocks#.lesson/instructions.md)
  

## Create Block commands
* `npx @wordpress/create-block my-first-block --title="My First Block" --namespace=helloblocks`
* `npx @wordpress/create-block@ my-first-dynamic-block --title="My First Dynamic Block" --template=@ryanwelcher/dynamic-block-template --namespace=helloblocks`

## Package Documentation Links
* [@wordpress/create-block package documentation](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
* [@wordpress/scripts package documentation]([https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/))
* [@wordpress/dependency-extraction-webpack-plugin package documentation](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-dependency-extraction-webpack-plugin/)

```js
"scripts": {
		"build": "wp-scripts build",
		"format": "wp-scripts format",
		"lint:css": "wp-scripts lint-style",
		"lint:js": "wp-scripts lint-js",
		"start": "wp-scripts start",
		"packages-update": "wp-scripts packages-update"
	},
```