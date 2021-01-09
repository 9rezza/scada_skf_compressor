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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['chart'] = 'main/chart';
$route['1scada'] = 'main/scada';
$route['export_data'] = 'main/export_data';
$route['export_data_download'] = 'main/export_data_download';


$route['insert_image_symbol'] = 'main/insert_image_symbol';
$route['hmi_update_postition'] = 'main/hmi_update_postition';
$route['update_hmi_z_index'] = 'main/update_hmi_z_index';
$route['hmi_delete'] = 'main/hmi_delete';
$route['textbox_update_postition'] = 'main/textbox_update_postition';

$route['production'] = 'main/production';
$route['production_trigger/(:any)'] = 'main/production_trigger/$1';
$route['production_trouble/(:any)'] = 'main/production_trouble/$1';
$route['production_reset_process/(:any)'] = 'main/production_reset_process/$1';
$route['production_status_check'] = 'main/production_status_check';
$route['production_status_change'] = 'main/production_status_change';
$route['production_line_stop_check'] = 'main/production_line_stop_check';
$route['production_line_stop_change'] = 'main/production_line_stop_change';
$route['production_line_stop_update'] = 'main/production_line_stop_update';
$route['production_added'] = 'main/production_added';

$route['insert_production_symbol'] = 'main/insert_production_symbol';
$route['production_update_postition'] = 'main/production_update_postition';
$route['update_production_z_index'] = 'main/update_production_z_index';
$route['production_delete'] = 'main/production_delete';
$route['production_textbox_update_postition'] = 'main/production_textbox_update_postition';

$route['monitoring'] = 'main/monitoring';
$route['monitoring_added'] = 'main/monitoring_added';
$route['reset_monitoring'] = 'main/reset_monitoring';

$route['reset_production'] = 'main/reset_production';

$route['benchmark_record_data/(:any)'] = 'main/benchmark_record_data/$1';
// $route['login'] = 'login/login';
// $route['check_credential'] = 'login/submit';
// $route['lemari/(:any)'] = 'main/toolbox/$1';
// $route['users'] = 'admin/account_manager';
// $route['get_json_users'] = 'admin/get_json_users';
// $route['username_check'] = 'admin/username_check';
// $route['reusername_check'] = 'admin/reusername_check';
// $route['get_user'] = 'admin/get_user';
// $route['insert_user'] = 'admin/insert_user';
// $route['delete_user/(:any)'] = 'admin/delete_user/$1';
// $route['history'] = 'main/history';
// $route['get_json_history/(:any)'] = 'main/get_json_history/$1';
// $route['action'] = 'main/action';
// $route['out'] = 'main/ambil';
// $route['in'] = 'main/taruh';