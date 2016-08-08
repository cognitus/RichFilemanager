<?php
/**
 *	Filemanager PHP connector
 *  Initial class, put your customizations here
 *
 *	@license	MIT License
 *	@author		Riaan Los <mail (at) riaanlos (dot) nl>
 *  @author		Simon Georget <simon (at) linea21 (dot) com>
 *  @author		Pavel Solomienko <https://github.com/servocoder/>
 *  @author		Tomás Flores <cognitus (at) outlook (dot) com>
 *	@copyright	Authors
 */

// only for debug
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//ini_set('display_errors', '1');

require_once('BaseHelper.php');

$fm = BaseHelper::getInstance();

include_once('LaravelConfig.php');
$laravel = new LaravelConfig();  
$laravel = $laravel->getInstance();
 /**
  *  Check if user is authorized
  *  
  *
  *  @return boolean true if access granted, false if no access
  */
if(!$laravel->auth) {
   $fm->error($fm->lang('AUTHORIZATION_REQUIRED'));
}   
$fm->setFileRoot('//'. $laravel->folder);  //start with '//' no idea why  

// use to setup files root folder
//$fm->setFileRoot('userfiles', true);

$fm->handleRequest();