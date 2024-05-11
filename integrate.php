<?php

include_once 'C:/laragon/www/etvo-manage/const.php';
include_once CONTROL_DIR . '/util.php';


define('HOME_DIR', '/');
define('MANAGE_URL', 'http://etvo-manage.test/');

// Home URL
define(
    'HOME_URL',
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
        ? 'https'
        : 'http'
        . '://' . $_SERVER['SERVER_NAME'] . HOME_DIR
);
