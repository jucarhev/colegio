<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = FALSE;



$route['profesores/pagina/(:num)'] = 'profesores/index/$1';
$route['profesores'] = 'profesores/index';

$route['grados/pagina/(:num)'] = 'grados/index/$1';
$route['grados'] = 'grados/index';

$route['grupos/pagina/(:num)'] = 'grupos/index/$1';
$route['grupos'] = 'grupos/index';

$route['materias/pagina/(:num)'] = 'materias/index/$1';
$route['materias'] = 'materias/index';