<?php

    $config = array(
        'db' => array(
            'db1' => array(
                'dbname' => 'marking_assistant',
                'username' => 'admin',
                'password' => 'password',
                'host' => '35.160.9.209',
            ),
        ),
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
