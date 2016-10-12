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
$route['default_controller'] 								= 'home';
$route['404_override'] 										= '';
$route['translate_uri_dashes'] 								= FALSE;
$route['admin'] 											= 'admin/adminhome/index';
$route['admin/dashboard'] 									= 'admin/admindashboard/dashboard';
$route['admin/logout'] 										= 'admin/adminhome/logout';
$route['users/adminusers'] 									= 'users/adminusers';
$route['users/add_adminusers'] 								= 'users/add_adminusers';
$route['users/edit_adminusers'] 							= 'users/edit_adminusers';
$route['admindashboard/endusers'] 							= 'admindashboard/endusers';
$route['admindashboard/edit_endusers'] 						= 'admindashboard/edit_endusers';
$route['admin/delete'] 										= 'admin/admindashboard/delete';
$route['admindashboard/category'] 							= 'admindashboard/category';
$route['admindashboard/add_category'] 						= 'admindashboard/add_category';
$route['admindashboard/edit_category/(:any)'] 				= 'admindashboard/edit_category';

$route['admindashboard/subcategory'] 						= 'admindashboard/subcategory';
$route['admindashboard/add_subcategory'] 					= 'admindashboard/add_subcategory';
$route['admindashboard/edit_subcategory/(:any)'] 			= 'admindashboard/edit_subcategory';
$route['admindashboard/recipient'] 							= 'admindashboard/recipient';
$route['admindashboard/add_recipient'] 						= 'admindashboard/add_recipient';
$route['admindashboard/edit_recipient'] 					= 'admindashboard/edit_recipient';
$route['admindashboard/giftproduct'] 						= 'admindashboard/giftproduct';
$route['admindashboard/add_giftproduct'] 					= 'admindashboard/add_giftproduct';
$route['admindashboard/edit_giftproduct'] 					= 'admindashboard/edit_giftproduct';
$route['admindashboard/product_attributes'] 				= 'admindashboard/product_attributes';
$route['admindashboard/add_product_attributes'] 			= 'admindashboard/add_product_attributes';
$route['admindashboard/edit_product_attributes/(:any)'] 	= 'admindashboard/edit_product_attributes';
$route['admindashboard/loadcategory_reference'] 			= 'admindashboard/loadcategory_reference';
$route['admindashboard/product_attribute_sets'] 			= 'admindashboard/product_attribute_sets';
// $route['admindashboard/delete/(:any)/(:any)'] 			= 'admindashboard/delete';




$route['admindashboard/area'] 								= 'admindashboard/area';
$route['admindashboard/add_area'] 							= 'admindashboard/add_area';
$route['admindashboard/edit_area'] 							= 'admindashboard/edit_area';
$route['admindashboard/city'] 								= 'admindashboard/city';
$route['admindashboard/add_city'] 							= 'admindashboard/add_city';
$route['admindashboard/edit_city'] 							= 'admindashboard/edit_city';

$route['admindashboard/state'] 								= 'admindashboard/state';
$route['admindashboard/add_state'] 							= 'admindashboard/add_state';
$route['admindashboard/edit_state'] 						= 'admindashboard/edit_state';

$route['admindashboard/order'] 								= 'admindashboard/order';
$route['admindashboard/edit_order'] 						= 'admindashboard/edit_order';
$route['admindashboard/orderitem'] 							= 'admindashboard/orderitem';
$route['admindashboard/edit_orderitem'] 					= 'admindashboard/edit_orderitem';
$route['admindashboard/edit_transaction'] 					= 'admindashboard/edit_transaction';
// $route['admindashboard/admin_404'] 						= 'admin/admindashboard/admin_nopage';
$route['admin/admin_404'] 									= 'admin/admindashboard/admin_nopage';
