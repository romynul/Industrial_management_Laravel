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

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);


Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
	Route::get('/home/add', 'HomeController@add')->name('home.add');
	Route::post('/home/add', 'HomeController@create');
	Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
	Route::post('/home/delete/{sid}', 'HomeController@destroy');	



	Route::get('/products', 'ProductsController@index')->name('products.index');
	Route::get('/products/stdList', 'ProductsController@show')->name('products.stdlist');
	Route::get('/products/edit/{sid}', 'ProductsController@edit')->name('products.edit');
	Route::post('/products/edit/{sid}', 'ProductsController@update');
	Route::get('/products/details/{sid}', 'ProductsController@details')->name('products.details');
	Route::get('/products/add', 'ProductsController@add')->name('products.add');
	Route::post('/products/add', 'ProductsController@create');
	Route::get('/products/delete/{sid}', 'ProductsController@delete')->name('products.delete');
	Route::post('/products/delete/{sid}', 'ProductsController@destroy');	


	Route::get('/dashboard', 'dashboardController@index')->name('dashboard.index');


	Route::get('/dashboard/client', 'ClientController@index')->name('dashboard.client');
	Route::get('/dashboard/edit_client/{sid}', 'ClientController@edit')->name('dashboard.edit_client');
	Route::post('/dashboard/edit_client/{sid}', 'ClientController@update');
	Route::get('/dashboard/add_client', 'ClientController@add')->name('dashboard.add_client');
	Route::post('/dashboard/add_client', 'ClientController@create');
	Route::get('/dashboard/delete/{sid}', 'ClientController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'ClientController@destroy');	


	Route::get('/dashboard/employee', 'EmployeeController@index')->name('dashboard.employee');
	Route::get('/dashboard/edit_employee/{sid}', 'EmployeeController@edit')->name('dashboard.edit_employee');
	Route::post('/dashboard/edit_employee/{sid}', 'EmployeeController@update');
	Route::get('/dashboard/add_employee', 'EmployeeController@add')->name('dashboard.add_employee');
	Route::post('/dashboard/add_employee', 'EmployeeController@create');
	Route::get('/dashboard/delete/{sid}', 'EmployeeController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'EmployeeController@destroy');	

	Route::get('/dashboard/labour', 'LabourController@index')->name('dashboard.labour');
	Route::get('/dashboard/edit_labour/{sid}', 'LabourController@edit')->name('dashboard.edit_labour');
	Route::post('/dashboard/edit_labour/{sid}', 'LabourController@update');
	Route::get('/dashboard/add_labour', 'LabourController@add')->name('dashboard.add_labour');
	Route::post('/dashboard/add_labour', 'LabourController@create');
	Route::get('/dashboard/delete/{sid}', 'LabourController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'LabourController@destroy');	

	Route::get('/dashboard/supplier', 'SupplierController@index')->name('dashboard.supplier');
	Route::get('/dashboard/edit_supplier/{sid}', 'SupplierController@edit')->name('dashboard.edit_supplier');
	Route::post('/dashboard/edit_supplier/{sid}', 'SupplierController@update');
	Route::get('/dashboard/add_supplier', 'SupplierController@add')->name('dashboard.add_supplier');
	Route::post('/dashboard/add_supplier', 'SupplierController@create');
	Route::get('/dashboard/delete/{sid}', 'SupplierController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'SupplierController@destroy');	

	Route::get('/dashboard/project', 'ProjectController@index')->name('dashboard.project');
	Route::get('/dashboard/edit_project/{sid}', 'ProjectController@edit')->name('dashboard.edit_project');
	Route::post('/dashboard/edit_project/{sid}', 'ProjectController@update');
	Route::get('/dashboard/add_project', 'ProjectController@add')->name('dashboard.add_project');
	Route::post('/dashboard/add_project', 'ProjectController@create');
	Route::get('/dashboard/delete/{sid}', 'ProjectController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'ProjectController@destroy');	

	Route::get('/dashboard/expense', 'ExpenseController@index')->name('dashboard.expense');
	Route::get('/dashboard/edit_expense/{sid}', 'ExpenseController@edit')->name('dashboard.edit_expense');
	Route::post('/dashboard/edit_expense/{sid}', 'ExpenseController@update');
	Route::get('/dashboard/add_expense', 'ExpenseController@add')->name('dashboard.add_expense');
	Route::post('/dashboard/add_expense', 'ExpenseController@create');
	Route::get('/dashboard/delete/{sid}', 'ExpenseController@delete')->name('dashboard.delete');
	Route::post('/dashboard/delete/{sid}', 'ExpenseController@destroy');	



});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




