<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Home route */
$route['home/(:any)'] = 'home/view/$1';
$route['home'] = 'home/view';

/* Booking route */
$route['booking/delete'] = 'booking/delete';
$route['booking/update'] = 'booking/update';
$route['booking/view'] = 'booking/view';
$route['booking/(:any)/(:any)'] = 'booking/index/$1/$2';
$route['booking'] = 'booking/index';

/* Customer route */
$route['customer/update'] = 'customer/update';
$route['customer/delete'] = 'customer/delete';
$route['customers/(:any)'] = 'customer/index/$1';
$route['customers'] = 'customer/index';

/* Room route */
$route['rooms/(:any)'] = 'rooms/view/$1';
$route['rooms'] = 'rooms/view';


/* Employee route */
$route['employee/delete'] = 'employee/delete';
$route['employee/update'] = 'employee/update';
$route['employee/add'] = 'employee/add';
$route['employees/(:any)'] = 'employee/view/$1';
$route['employees'] = 'employee/view';

/* Default route */
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
