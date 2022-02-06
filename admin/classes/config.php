<?php
//Separate file with sensitive info
include ('sensitive.php');

//TODO: set to false on release
ini_set("display_errors",true);
ini_set("opcache.enable",0);
//Set to MY timezone
date_default_timezone_set('America/Los_Angeles');
//Define database information
define("DB_DSN","mysql:host=localhost;dbname={$dbname}");
define("DB_USERNAME", $dbuser);
define("DB_PASSWORD", $dbpass);
//Where classes will be stored
define("CLASS_PATH","classes");
//Where we store templates for the page
define("TEMPLATE_PATH","templates");
//How many posts to show on frontpage
define("HOMEPAGE_NUM_ARTICLES",5);
//Set blog username & pass
define("ADMIN_USERNAME", $adminuser);
define("ADMIN_PASSWORD", $adminpass);
define("GOOGLE_API_CLIENT_ID", $googleApiClient);
define("GOOGLE_API_SECRET_ID", $googleApiSecret);
//Image settings
//Image base directory for posts
define("POST_IMAGE_PATH","images/posts");
//Image base directory for recipes
define("RECIPE_IMAGE_PATH","images/recipes");
//Image directory for full size images
define("IMG_TYPE_FULLSIZE","fullsize");
//Image directory for thumbnail size images
define("IMG_TYPE_THUMB","thumb");
//What to resize thumbnail width to (height auto managed)
define("POST_THUMB_WIDTH",515);
//JPEG Resolution for storage
define("JPEG_QUALITY",85);
//Add classes
require(CLASS_PATH."/Post.class.php");
require (CLASS_PATH."/Recipe.class.php");

//Controls how and where we log errors
function handleException($exception){
    echo "There was an error. Please try again later";
    error_log($exception->getMessage());
}

set_exception_handler('handleException');