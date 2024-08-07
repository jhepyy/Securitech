<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\SecuritechController;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get('login', 'SecuritechController::index'); /**login */


// Admin-Dashboard
$routes->get('admin_dashboards', 'SecuritechController::admin'); /** route in admin page for the dashboard */


//  Admin-Student | CRUD
$routes->get('admin_Students', 'SecuritechController::student'); /** route in admin userpage page drop down list for Student */
$routes->post('admin_Students/import', 'SecuritechController::import'); //import csv

$routes->post('admin_Students/save', 'SecuritechController::save'); // save the data inserted to database
$routes->post('admin_Students/update', 'SecuritechController::update'); //to update or edit the data

$routes->post('admin_Students/delete', 'SecuritechController::delete');


// Admin-Instructor | CRUD
$routes->get('admin_Instructor', 'SecuritechController::instructor'); /** route in admin user page drop down list for instructor */


// Admin-Staff | CRUD
$routes->get('admin_Staff', 'SecuritechController::staff'); /** route in admin user page drop down list for staff */


// Admin-Attendancelog | CRUD
$routes->get('admin_AttendanceLog', 'SecuritechController::attendanceLog'); /** route in admin page for attendance Log */

$routes->get('admin_AttendanceLogs', 'SecuritechController::attendanceLogs'); /** this is for all instructor handling attendance  */

$routes->get('admin_Schedule', 'SecuritechController::schedule'); /** route in admin page for scheduling*/



$routes->get('admin_GenerationReport', 'SecuritechController::reports'); /** route in admin page for generation of reports*/

$routes->get('admin_Equipment', 'SecuritechController::equipment'); /** route in admin page for Equipment Inventory*/

// logout
$routes->post('logout', 'SecuritechController::logout'); // logout for admin


$routes->get('user_dashboards', 'SecuritechController::user'); /** user page for the dashboard */

$routes->get('user_attendance', 'SecuritechController::attendance'); /** user page for the attendance Log */

$routes->get('user_reports', 'SecuritechController::reports_user'); /** user page for the reports*/

$routes->get('user_schedule', 'SecuritechController::schedule_user'); /** user page for the schedule*/

