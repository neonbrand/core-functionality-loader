<?php
/*
Plugin Name:  Core Functionality Loader
Plugin URI:   https://mainwp.neonbrand.com/
Description:  Load the Core Functionality plugin
Version:      1.0.0
Author:       NeONBRAND
Author URI:   https://neonbrand.com/
License:      MIT License
*/

if(file_exists(WP_CONTENT_DIR . "/core-functionality/plugin.php"))
    include_once WP_CONTENT_DIR . "/core-functionality/plugin.php";
