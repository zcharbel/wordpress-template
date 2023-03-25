# README #

This is a blank Wordpress theme that uses Advanced Custom Fields (ACF) for content mangement. This template has all the basic ACF fields, ACF options and WP pages set up to allow you to hit the ground running.

Please follow the steps below to get set up and running.

### Setting up Wordpress ###

- This project is run using a local PHP server, such as MAMP (https://www.mamp.info/en/downloads/) or something comprable. If you do not have it installed, install MAMP or prefered local server app now.

- If you are using a hostname other than "localhost:8888" to access this project, you will need to update the URL within the included .sql import file located in the "/wp-content/imports/database" folder. If it is different, do a global find and replace of "localhost:8888" to what ever your hostname is now.

- Create a database named "theme_boilerplate" within phpMyAdmin.

- Next, go to the wp-admin with a browser and navigate to "Tools > Import" and run the Wordpress importer function and import the included .sql file in the "/imports/database" folder.

- To pull in correct ACF field groups, navigate to "Customs Fields > Tools" within the wp-admin and import .xml file located at "/imports/advanced-custom-fields".

### Setting up Framework ###

- Open the gruntfile.js in text editor and update the "themeName" variable on line 4 to what you want to name your theme.

- Ensure that you have grunt, sass and node.js installed on your machine. If you do not, please follow the instructions contained within the links below:
    - Composer - https://getcomposer.org/
    - Grunt - https://gruntjs.com/installing-grunt
    - SASS - http://sass-lang.com/install
    - Node.js - https://nodejs.org/en/download/

- Navigate to the root project folder within terminal and run the following commands in the order they are listed:
	Just in case you glossed over this, rename the "themeName" variable to an appropriate theme name
	"composer install" - installs wordpress and plugins used (minus acf pro)
	"npm install" - this copies the theme and any plugins included in the root project folder. Also deletes default themes installed by composer
	"grunt copyTheme" - This copies over plugins you can't install via wordpress, deletes default themes that are installed and copies over custom theme to theme folder

- After you have done the above commands and if you need WooCommerce, Gravity Forms or WP Forms installed. You can install each of them with the following commands
	"grunt installWooCommerce" (Installs WooCommerce)
	"grunt installGF" (Installs Gravity Forms)
	"grunt installWPforms" (Installs WPFroms)
	"grunt installCache" (Installs WP Super Cache)

- Once the commands above are done simply run "grunt" within terminal, in the root folder, to spin up an instance of your site locally and you are good to go.

- ACF Google Map Block
	- In order to get the Google Map Block running. You will need to create an Google Cloud API key that has the "Maps JavaScript API", "Geocoding API" and "Places API" enabled.