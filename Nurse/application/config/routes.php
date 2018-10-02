<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/createpost'] = 'posts/createpost';
$route['posts/updatepost'] = 'posts/updatepost';
$route['posts/(:any)'] = 'posts/viewpost/$1';
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/viewpost';
$route['(:any)'] = 'pages/viewpost/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
