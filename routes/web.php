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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);


Route::group(['middleware'=>['sess']], function(){

	Route::get('/dashboard', 'dashboardController@index')->name('dashboard.index');
	Route::get('/dashboard/logs', 'dashboardController@logs')->name('dashboard.logs');
	Route::get('/dashboard/profile', 'dashboardController@profile')->name('dashboard.profile');


	Route::get('/dashboard/client', 'ClientController@index')->name('dashboard.client');
	Route::get('/dashboard/edit_client/{cid}', 'ClientController@edit')->name('dashboard.edit_client');
	Route::post('/dashboard/edit_client/{cid}', 'ClientController@update');
	Route::get('/dashboard/add_client', 'ClientController@add')->name('dashboard.add_client');
	Route::post('/dashboard/add_client', 'ClientController@create');
	Route::get('/dashboard/delete_client/{cid}', 'ClientController@delete')->name('dashboard.delete_client');
	Route::post('/dashboard/delete_client/{cid}', 'ClientController@destroy');	


	Route::get('/dashboard/employee', 'EmployeeController@index')->name('dashboard.employee');
	Route::get('/dashboard/edit_employee/{eid}', 'EmployeeController@edit')->name('dashboard.edit_employee');
	Route::post('/dashboard/edit_employee/{eid}', 'EmployeeController@update');
	Route::get('/dashboard/add_employee', 'EmployeeController@add')->name('dashboard.add_employee');
	Route::post('/dashboard/add_employee', 'EmployeeController@create');
	Route::get('/dashboard/delete_employee/{eid}', 'EmployeeController@delete')->name('dashboard.delete_employee');
	Route::post('/dashboard/delete_employee/{eid}', 'EmployeeController@destroy');	

	Route::get('/dashboard/labour', 'LabourController@index')->name('dashboard.labour');
	Route::get('/dashboard/edit_labour/{lid}', 'LabourController@edit')->name('dashboard.edit_labour');
	Route::post('/dashboard/edit_labour/{lid}', 'LabourController@update');
	Route::get('/dashboard/add_labour', 'LabourController@add')->name('dashboard.add_labour');
	Route::post('/dashboard/add_labour', 'LabourController@create');
	Route::get('/dashboard/delete_labour/{lid}', 'LabourController@delete')->name('dashboard.delete_labour');
	Route::post('/dashboard/delete_labour/{lid}', 'LabourController@destroy');	

	Route::get('/dashboard/supplier', 'SupplierController@index')->name('dashboard.supplier');
	Route::get('/dashboard/edit_supplier/{sid}', 'SupplierController@edit')->name('dashboard.edit_supplier');
	Route::post('/dashboard/edit_supplier/{sid}', 'SupplierController@update');
	Route::get('/dashboard/add_supplier', 'SupplierController@add')->name('dashboard.add_supplier');
	Route::post('/dashboard/add_supplier', 'SupplierController@create');
	Route::get('/dashboard/delete_supplier/{sid}', 'SupplierController@delete')->name('dashboard.delete_supplier');
	Route::post('/dashboard/delete_supplier/{sid}', 'SupplierController@destroy');	

	Route::get('/dashboard/project', 'ProjectController@index')->name('dashboard.project');
	Route::get('/dashboard/edit_project/{sid}', 'ProjectController@edit')->name('dashboard.edit_project');
	Route::post('/dashboard/edit_project/{sid}', 'ProjectController@update');
	Route::get('/dashboard/add_project', 'ProjectController@add')->name('dashboard.add_project');
	Route::post('/dashboard/add_project', 'ProjectController@create');
	Route::get('/dashboard/delete_project/{sid}', 'ProjectController@delete')->name('dashboard.delete_project');
	Route::post('/dashboard/delete_project/{sid}', 'ProjectController@destroy');	

	Route::get('/dashboard/expense', 'ExpenseController@index')->name('dashboard.expense');
	Route::get('/dashboard/edit_expense/{sid}', 'ExpenseController@edit')->name('dashboard.edit_expense');
	Route::post('/dashboard/edit_expense/{sid}', 'ExpenseController@update');
	Route::get('/dashboard/add_expense', 'ExpenseController@add')->name('dashboard.add_expense');
	Route::post('/dashboard/add_expense', 'ExpenseController@create');
	Route::get('/dashboard/delete_expense/{sid}', 'ExpenseController@delete')->name('dashboard.delete_expense');
	Route::post('/dashboard/delete_expense/{sid}', 'ExpenseController@destroy');	



});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




