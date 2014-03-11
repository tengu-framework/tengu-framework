<?php
/**
 * Oni MVC Framework
 *
 * @package  Oni
 * @version  1.0
 * @author   Shea Lewis (Kai) <shea.lewis89@gmail.com>
 * @license  MIT License
 */
defined('BASE_PATH') or exit('No direct script access allowed.');

/*
 * ---------------------------------------------------------------
 * LOAD COMPOSER AUTOLOADER
 * ---------------------------------------------------------------
 */
if ( ! is_readable(VENDOR_PATH.'/autoload.php')) {
	die('Please install Composer first by running "php composer.phar install" from the root of your installation');
}

require VENDOR_PATH.'/autoload.php';

/* End of file core/bootstrap.php */