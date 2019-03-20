<?php
// Setup cli v0.1
// Setup raw with classes \script module
// This file is loaded by require in cli command
// If need some module, first setup this module like sql
// php index.php setup xeki_db_sql

// Force cli run this
// Check is is cli
if(!is_cli()){
    die();
}
$name_module = "db-sql";
$name_module_full = "$name_module-module";

// Check if have config
$config_folder = \xeki\core::$SYSTEM_PATH_BASE."/core/modules_config/$name_module";
$config_folder_file = $config_folder."/config.php";


// Create folder
if(!file_exists($config_folder)){
    mkdir($config_folder,0777,true);
}

$config_default = \xeki\core::$SYSTEM_PATH_BASE."/modules/$name_module_full/setup/default_config.php";
if(!file_exists($config_folder_file)){
    copy($config_default,$config_folder_file);
}

// TODO clean for mail gun
// Create mail as base and create
// mail-aws ( a lot of libs )
// mail-mailgun
// mail-smtp
exec("composer require aws/aws-sdk-php");
exec("composer require phpmailer/phpmailer");
exec("composer require mailgun/mailgun-php");
exec("composer require php-http/curl-client");
exec("composer require guzzlehttp/psr7");
exec("composer require guzzlehttp/guzzle");
exec("composer require php-http/guzzle6-adapter");
exec("composer require mailgun/mailgun-php php-http/curl-client guzzlehttp/psr7");



