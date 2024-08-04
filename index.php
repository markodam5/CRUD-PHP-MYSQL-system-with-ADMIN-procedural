<?php

/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */

require('config.php');

// Validate what page to show:
if (isset($_GET['page'])) {
    $p = $_GET['page'];
}else {
    $p = NULL;
    // include('404.php');
}

// Determine what page to display:
switch ($p) {
     case 'home':
        $page = 'home.php';
        $page_title = 'Home Page';
    break;
    case 'details':
        $page = 'details.php';
        $page_title = 'Details Page';
    break;
    
    default: // Default is to include the main page.
        $page = 'home.php';
        $page_title = 'Home Page';
        
} // End of main switch.


// Make sure the file exists:
if (!file_exists($page)) {
    $page = 'home.php';
    $page_title = 'HOME';
}

// Include the header file:
include('./includes/header.php');

// Include the content-specific module:
// $page is determined from the above switch.
include($page);

// Include the footer file:
include('./includes/footer.php');