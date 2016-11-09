<?php

    /*
     * Config file loaded in each file.
     * Connection state is stored here for database access and code re-usability
    */

    $db_host = '35.160.9.209';
    $db_name = 'marking_assistant';
    $db_user = 'admin';
    $db_pass = 'password';

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: '.$e->getMessage();
    }


    // load user class
    // might be better to load this for each individual page that requires the user class. 
    include_once 'resources/library/class.user.php';
    // set user with current connection
    $user = new USER($conn);

    $config = array(
        'urls' => array(
            'baseUrl' => 'http://seanvowles.co.uk/',
        ),
        'paths' => array(
            'resources' => 'resources',
        ),
    );

    defined('LIBRARY_PATH')
    or define('LIBRARY_PATH', realpath(dirname(__FILE__).'/library'));

    defined('TEMPLATES_PATH')
    or define('TEMPLATES_PATH', realpath(dirname(__FILE__).'/templates'));

    ini_set('display_errors', 'On');

?>
