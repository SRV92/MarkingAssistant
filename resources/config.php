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
    'baseUrl' => 'http://seanvowles.co.uk',
),
'paths' => array(
    'resources' => '/var/www/html/MarkingAssistant',
    'images' => array(
        'content' => $_SERVER['DOCUMENT_ROOT'].'/content/img',
    ),
),
);
