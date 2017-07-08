<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



/*Admin related route configurations*/
$route['admin/logout'] = 'admin/user/logout';
$route['admin/login/validate_credentials'] = 'admin/user/validate_credentials';
$route['admin/login'] = 'admin/user';
$route['admin']="admin/user";

$route['admin/home']='admin/home';

$route['admin/projects']='admin/project';
$route['admin/projects/add']='admin/project/add';
$route['admin/projects/update']='admin/project/update';
$route['admin/projects/update/(:any)'] = 'admin/project/update/$1';
$route['admin/projects/delete/(:any)'] = 'admin/project/delete/$1';
$route['admin/projects/(:any)'] = 'admin/projects/index/$1';

$route['admin/propertytypes']='admin/property_type';
$route['admin/propertytypes/add']='admin/property_type/add';
$route['admin/propertytypes/update']='admin/property_type/update';
$route['admin/propertytypes/update/(:any)'] = 'admin/property_type/update/$1';
$route['admin/propertytypes/delete/(:any)'] = 'admin/property_type/delete/$1';
$route['admin/propertytypes/(:any)'] = 'admin/property_type/index/$1';

$route['admin/communities']='admin/community';
$route['admin/communities/add']='admin/community/add';
$route['admin/communities/update']='admin/community/update';
$route['admin/communities/update/(:any)'] = 'admin/community/update/$1';
$route['admin/communities/delete/(:any)'] = 'admin/community/delete/$1';
$route['admin/communities/(:any)'] = 'admin/community/index/$1';



$route['default_controller'] = 'admin/user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;





