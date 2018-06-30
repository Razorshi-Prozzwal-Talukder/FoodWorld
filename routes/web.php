<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Starting Section
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});


//-------------------------Home Section------------------------------
Route::get('/about', 'HomepageController@about');
Route::get('/contact', 'HomepageController@contact');
Route::get('/suggestion', 'HomepageController@suggestion');
Route::get('/login', 'HomepageController@login');
Route::get('/login_manager', 'HomepageController@login_manager');
//For Fill the Form
Route::get('/formfillup', 'HomepageController@formfillup');
//Request Form Sending part
Route::post('/save_form', 'HomepageController@save_form');




//-------------------------Admin Section------------------------------
//Login part
Route::post('/adminlogin', 'AdminController@adminlogin');
//Showing dashboard part
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
//Lgout part
Route::get('/adminlogout', 'AdminController@adminlogout');



//Addmanager part
Route::get('/addmanager', 'AddmanagerController@addmanager');
//Addmanager saveing part
Route::post('/save_manager', 'AddmanagerController@save_manager');
//Allmanager part
Route::get('/allmanager', 'AllmanagerController@allmanager');
//Manager delete
Route::get('/manager_delete/{manager_id}', 'AllmanagerController@manager_delete');
//Manager view 
Route::get('/manager_view/{manager_id}', 'AllmanagerController@manager_view');
//Manager profile Edit 
Route::get('/manager_edit/{manager_id}', 'AllmanagerController@manager_edit');
//Update Manager Profile
Route::post('/update_manager/{manager_id}', 'AllmanagerController@manager_update'); 



//Profile view
Route::get('/admin_viewprofile', 'AdminController@admin_viewprofile');
//Setting
Route::get('/admin_setting', 'AdminController@admin_setting');
//Update Admin Profile
Route::post('/update_admin', 'AdminController@update_admin');


//Request Form part
Route::get('/request', 'RequestController@request');
//Request view 
Route::get('/request_view/{owner_id}', 'RequestController@request_view');
//Form delete
Route::get('/request_delete/{owner_id}', 'RequestController@request_delete');






//Restaurent part
Route::get('/addrestaurent', 'AddmanagerController@addrestaurent');
//Restaurent saveing part
Route::post('/save_restaurent', 'AddmanagerController@save_restaurent');
//All-Restaurent part
Route::get('/allrestaurent', 'AllmanagerController@allrestaurent');
//Restaurent profile Edit 
Route::get('/restaurent_edit/{restaurent_id}', 'AllmanagerController@restaurent_edit');
//Update Restaurent Profile
Route::post('/update_restaurent/{restaurent_id}', 'AllmanagerController@update_restaurent');
//Restaurent delete
Route::get('/restaurent_delete/{restaurent_id}', 'AllmanagerController@restaurent_delete'); 









//-------------------------Manager Section------------------------------
//Login part
Route::post('/managerlogin', 'ManagerController@managerlogin');
//Showing dashboard part
Route::get('/manager_dashboard', 'ManagerController@manager_dashboard');
//View Profile
Route::get('/manager_viewprofile', 'ManagerController@manager_viewprofile');
//Manager Logout
Route::get('/manager_logout', 'ManagerController@manager_logout'); 
//Setting
Route::get('/manager_setting', 'ManagerController@manager_setting');
//Update Manager Profile
Route::post('/manager_own_update', 'ManagerController@manager_own_update');




//Restaurent Setting Sechadule
Route::get('/manager_restaurent', 'ManagerController@manager_restaurent');
//Restaurent profile Edit 
Route::get('/restaurent_edit_manager/{restaurent_id}', 'ManagerController@restaurent_edit_manager');
//Update Restaurent Profile
Route::post('/update_restaurent_manager/{restaurent_id}', 'ManagerController@update_restaurent_manager');





//Add Item 
Route::get('/additem', 'AdditemController@additem');
//Store Item 
Route::post('/save_item', 'AdditemController@save_item');
//Allitem section
Route::get('/allitem', 'AllitemController@allitem');
//Item Edit 
Route::get('/item_edit/{item_id}', 'AllitemController@item_edit');
//Update Item Details
Route::post('/update_item/{item_id}', 'AllitemController@update_item');
//Item delete
Route::get('/item_delete/{item_id}', 'AllitemController@item_delete');



//Add Platter 
Route::get('/addplatter', 'PlatterController@addplatter');
//Store Platter 
Route::post('/save_platter', 'PlatterController@save_platter');
//All Platter section
Route::get('/allplatter', 'PlatterController@allplatter');
//Platter details view 
Route::get('/platter_view/{platter_id}', 'PlatterController@platter_view');
//Platter Edit 
Route::get('/platter_edit/{platter_id}', 'PlatterController@platter_edit');
//Update Platter Details
Route::post('/update_platter/{platter_id}', 'PlatterController@update_platter');
//Platter delete
Route::get('/platter_delete/{platter_id}', 'PlatterController@platter_delete');