<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['daftarmatakuliah'] = 'daftar_matakuliah';
$route['matakuliah'] = 'courses/matakuliah';
$route['matakuliah/add'] = 'courses/matakuliah/add';
$route['matakuliah/edit/(:any)'] = 'courses/matakuliah/edit/$1';
$route['matakuliah/detail/(:any)'] = 'courses/matakuliah/detail/$1';
$route['matakuliah/print/(:any)'] = 'courses/matakuliah/print/$1';
$route['matakuliah/delete/(:any)'] = 'courses/matakuliah/delete/$1';
$route['dosen'] = 'courses/dosen';
$route['dosen/add'] = 'courses/dosen/add';
$route['dosen/edit/(:any)'] = 'courses/dosen/edit/$1';
$route['dosen/delete/(:any)'] = 'courses/dosen/delete/$1';
$route['semester'] = 'courses/semester';
$route['semester/add'] = 'courses/semester/add';
$route['semester/edit/(:any)'] = 'courses/semester/edit/$1';
$route['semester/delete/(:any)'] = 'courses/semester/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
