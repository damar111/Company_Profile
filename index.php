<?php

define('PATH_CONFIG', 'app/config/');
define('PATH_CONTROLLER', 'app/controller/');
define('PATH_MODEL', 'app/model/');
define('PATH_VIEW', 'resources/view/');
define('PATH_VENDOR', 'vendor/');

// Make sure you have Composer's autoload file included
require(PATH_VENDOR . 'autoload.php');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require('app/__controller.php');
/*
*  ---------------------------
*  Load All Your Model
*  ---------------------------
*/
/* All Model */
require('app/__model.php');
/*
* -------------------
*     MAIN ROUTES
* -------------------
*/
require 'vendor/autoload.php';

// Start ROUTE
$project_location = "/buyapps-project2_new";
$me = $project_location;

// For get URL PATH
$request = strtok($_SERVER["REQUEST_URI"], '?');

switch ($request) {
    case $me . '/':
        MainController::index();
        break;
    case $me . '/home':
        MainController::index();
        break;
    case $me . '/viewarticles':
        MainController::show_article();
        break;
    case $me . '/admin':
        MainController::dashboard();
        break;
    case $me . '/table':
        MainController::table();
        break;
    case $me . '/account':
        MainController::account();
        break;
    case $me . '/delete_account':
        MainController::delete_account();
        break;
    case $me . '/edit_pw':
        MainController::edit_pw();
        break;
    case $me . '/create':
        MainController::create();
        break;
    case $me . '/delete':
        MainController::delete();
        break;
    case $me . '/edit':
        MainController::edit();
        break;
    case $me . '/login':
        MainController::login();
        break;
    case $me . '/logout':
        MainController::logout();
        break;
    case $me . '/regist':
        MainController::regist();
        break;
    default:

        http_response_code(404);
        echo $request;
        echo '===seharusnya===';
        echo $me . '/something';
        echo "404";

        break;
}
