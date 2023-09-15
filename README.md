# README #

This is a blank Wordpress theme that uses Advanced Custom Fields (ACF) for content mangement. This template has all the basic ACF fields, ACF options and WP pages set up to allow you to hit the ground running.

Please follow the steps below to get set up and running.

### Setting up Framework ###

- Navigate to the root project folder within a finder window and update the following files:
	- Navigate to gruntfile.js and update the "themeName" variable on line 4 to what you want to name your theme.
	- Navigate to theme > functions.js and update the "wpframework" variable on line 21 to the same name you used within the gruntfile.js file
	- Navigate to theme > assets > scss > main.scss and update line 2 to the theme name you are using 
	  (This will be the name that appears in the theme section within the WP Admin)

- Once you've updated the two variables above. Ensure that you have grunt, sass and node.js installed on your machine. 
  If you do not, please follow the instructions contained within the links below:
    - Composer - https://getcomposer.org/
    - Grunt - https://gruntjs.com/installing-grunt
    - SASS - http://sass-lang.com/install
    - Node.js - https://nodejs.org/en/download/

- Navigate to the root project folder within terminal and run the following commands in the order they are listed:
	Just in case you glossed over this, rename the "themeName" variable to an appropriate theme name
	"composer install" - installs wordpress and plugins used (minus acf pro)
	"npm install" - this copies the theme and any plugins included in the root project folder. Also deletes default themes installed by composer
	"grunt copyTheme" - This copies over plugins you can't install via wordpress, deletes default themes that are installed and copies over custom theme to theme folder

- Once the commands above are done. Navigate to your root folder within terminal and run "grunt" to spin up an instance of your site locally and you are good to go.

- ACF Google Map Block
	- In order to get the Google Map Block running. You will need to create an Google Cloud API key that has the "Maps JavaScript API", "Geocoding API" and "Places API" enabled.
	
- Once the steps above are compete. Please follow the steps below to setup your database and wordpress instance.
	
### Setting up Wordpress ###
	
- This project is run using a local PHP server, such as MAMP (https://www.mamp.info/en/downloads/) or something comparable. If you do not have one installed, install MAMP or preferred local server app now.

- Start MAMP and create an empty database with an appropriate name within phpMyAdmin or preferred app.

- Next, create a new host within MAMP with the "document root" field pointing to the "wordpress" folder within the root folder of your project.

- Go to the WP Admin within a browser, localhost:8888/wp-admin, and follow the Wordpress Install Prompts.

- To get the ACF fields pulled into your wordpress instance. Navigate to the ACF section within the WP Admin and sync all current fields that are syncable.