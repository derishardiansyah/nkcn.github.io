<?php
defined('BASEPATH') or exit('No direct script access allowed');

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




//admin
$route['dashboard'] = 'dashboard';
// $route['dashboard'] = 'dashboard/deskripsi_admin';

$route['login_user'] = 'login_user';
$route['login_admin'] = 'login_admin';

$route['register_user'] = 'register_user';
$route['register_admin'] = 'register_admin';

//lembaga
$route['lembaga'] = 'lembaga/deskripsi_lembaga';
$route['lembaga'] = 'lembaga/deskripsi_maps';

$route['upt'] = 'upt/deskripsi_upt';
$route['upt'] = 'upt/deskripsi_maps';


//tambah
$route['admin/tambah_admin'] = 'admin/tambah_admin';
$route['admin/tambah_admin/simpan'] = 'admin/simpan';

$route['admin_maps/tambah_maps'] = 'admin_maps/tambah_maps';
$route['admin_maps/tambah_maps/simpan'] = 'admin_maps/simpan';
$route['admin_maps/ubah_maps'] = 'admin_maps/simpan';

$route['admin_lembaga/tambah_lembaga'] = 'admin_lembaga/tambah_lembaga';
$route['admin_lembaga/tambah_lembaga/simpan'] = 'admin_lembaga/simpan';

$route['admin_user/tambah_user'] = 'admin_user/tambah_user';
$route['admin_user/tambah_user/simpan'] = 'admin_user/simpan';

$route['admin_upt/tambah_upt'] = 'admin_upt/tambah_upt';
$route['admin_upt/tambah_upt/simpan'] = 'admin_upt/simpan';

$route['default_controller'] = 'login_user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
