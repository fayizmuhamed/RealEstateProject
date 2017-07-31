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

$route['admin/propertytypes']='admin/property_type';
$route['admin/propertytypes/add']='admin/property_type/add';
$route['admin/propertytypes/update']='admin/property_type/update';
$route['admin/propertytypes/update/(:any)'] = 'admin/property_type/update/$1';
$route['admin/propertytypes/delete/(:any)'] = 'admin/property_type/delete/$1';
$route['admin/propertytypes/(:any)'] = 'admin/property_type/index/$1';

$route['admin/testimonials']='admin/testimonial';
$route['admin/testimonials/add']='admin/testimonial/add';
$route['admin/testimonials/update/(:any)'] = 'admin/testimonial/update/$1';
$route['admin/testimonials/delete/(:any)'] = 'admin/testimonial/delete/$1';
$route['admin/testimonials/(:any)'] = 'admin/testimonial/index/$1';

$route['admin/opportunities']='admin/opportunity';
$route['admin/opportunities/add']='admin/opportunity/add';
$route['admin/opportunities/update/(:any)'] = 'admin/opportunity/update/$1';
$route['admin/opportunities/delete/(:any)'] = 'admin/opportunity/delete/$1';
$route['admin/opportunities/(:any)'] = 'admin/opportunity/index/$1';


$route['admin/employees']='admin/employee';
$route['admin/employees/add']='admin/employee/add';
$route['admin/employees/update/(:any)'] = 'admin/employee/update/$1';
$route['admin/employees/delete/(:any)'] = 'admin/employee/delete/$1';
$route['admin/employees/(:any)'] = 'admin/employee/index/$1';

$route['admin/departments']='admin/department';
$route['admin/departments/add']='admin/department/add';
$route['admin/departments/update/(:any)'] = 'admin/department/update/$1';
$route['admin/departments/delete/(:any)'] = 'admin/department/delete/$1';
$route['admin/departments/(:any)'] = 'admin/department/index/$1';

$route['admin/designations']='admin/designation';
$route['admin/designations/add']='admin/designation/add';
$route['admin/designations/update/(:any)'] = 'admin/designation/update/$1';
$route['admin/designations/delete/(:any)'] = 'admin/designation/delete/$1';
$route['admin/designations/(:any)'] = 'admin/designation/index/$1';

$route['admin/projects']='admin/project';
$route['admin/projects/add']='admin/project/add';
$route['admin/projects/save']='admin/project/save';
$route['admin/projects/edit/(:any)']='admin/project/edit/$1';
$route['admin/projects/update'] = 'admin/project/update';
$route['admin/projects/delete/(:any)'] = 'admin/project/delete/$1';
$route['admin/projects/delete_thumbnail/(:any)'] = 'admin/project/deleteProjectThumbnail/$1';
$route['admin/projects/(:any)'] = 'admin/projects/index/$1';



$route['admin/communities']='admin/community';
$route['admin/communities/add']='admin/community/add';
$route['admin/communities/save']='admin/community/save';
$route['admin/communities/edit/(:any)']='admin/community/edit/$1';
$route['admin/communities/update']='admin/community/update';
$route['admin/communities/delete/(:any)'] = 'admin/community/delete/$1';
$route['admin/communities/delete_thumbnail/(:any)'] = 'admin/community/deleteCommunityThumbnail/$1';
$route['admin/communities/(:any)'] = 'admin/community/index/$1';

$route['admin/config/careerguide']='admin/configuration/careerGuide';
$route['admin/config/infoguide']='admin/configuration/infoGuide';
$route['admin/config/ownersguide']='admin/configuration/ownersGuide';
$route['admin/config/tenantsguide']='admin/configuration/tenantsGuide';
$route['admin/config/buyersguide']='admin/configuration/buyersGuide';
$route['admin/config/about']='admin/configuration/about';
$route['admin/config']='admin/configurations';

$route['testimonial/findTestimonialWithSearch']='public/testimonial/findTestimonialWithSearch';
$route['testimonial/(:num)']='public/testimonial/index/$1';
$route['testimonial']='public/testimonial';

$route['contact/sendfeedback']='public/contact/send_feedback';
$route['contact']='public/contact';
$route['career']='public/career';
$route['infoguide']='public/index/infoGuide';

$route['ownersguide']='public/property_owner/ownersGuide';
$route['propertyowner']='public/property_owner';

$route['tenantsguide']='public/rent/tenantsGuide';
$route['rentdetail']='public/rent/rentDetails';
$route['rent']='public/rent';

$route['buyersguide']='public/buy/buyersGuide';
$route['buydetail']='public/buy/buyDetails';
$route['buy']='public/buy';

$route['viewprofile/(:num)']='public/team/viewProfile/$1';
$route['teams/findEmployeesWithSearch']='public/team/findEmployeesWithSearch';
$route['teams']='public/team';

$route['communities/getCommunities']='public/community/getCommunities';
$route['communities/(:num)']='public/community/index/$1';
$route['communities']='public/community';
$route['projects/(:num)']='public/project/index/$1';
$route['projects']='public/project';
$route['default_controller'] = 'public/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;





