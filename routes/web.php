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

Route::get('/', 'Backend\Invoice\InvoiceController@makeinvoice');
Route::get('/selectproduct/{client}', 'Backend\Invoice\InvoiceController@selectproduct');
Route::get('/selectproduct1/{client}/{invoice}', 'Backend\Invoice\InvoiceController@selectproduct1');
Route::get('/categoryselected/{client}/{category}/{invoice}', 'Backend\Invoice\InvoiceController@categoryselected');
Route::get('/additem/{client}/{product}/{invoice}', 'Backend\Invoice\InvoiceController@additem');
Route::get('/deleteitem/{item}', 'Backend\Invoice\InvoiceController@deleteitem');
Route::get('/confirminvoice/{client}/{invoice}', 'Backend\Invoice\InvoiceController@confirminvoice');

Route::get('/cancelinvoice/{client}/{invoice}', 'Backend\Invoice\InvoiceController@cancelinvoice');
Route::get('/login', 'Backend\Auth\AuthController@login')->name('login');
Route::get('/register', 'Backend\Auth\AuthController@register')->name('register');

Route::post('/authenticate', 'Backend\Auth\AuthController@authenticate')->name('authenticate');
Route::post('/signup', 'Backend\Auth\AuthController@signup')->name('signup');

Route::group(['middleware' => ['auth', 'permission:ver_dashboard']], function () {
  Route::get('/dashboard', 'Backend\Dashboard\DashboardController@index')->name('dashboard.index');
  Route::get('/deliverinvoice/{invoice}', 'Backend\Invoice\InvoiceController@deliverinvoice');
  Route::get('/paidinvoice/{invoice}', 'Backend\Invoice\InvoiceController@paidinvoice');
});

Route::group(['middleware' => ['auth', 'permission:ver_usuarios']], function () {
  Route::get('/users', 'Backend\Auth\UserController@index')->name('users.index');
});
Route::group(['middleware' => ['auth', 'permission:crear_usuario']], function () {
  Route::post('/user', 'Backend\Auth\UserController@store');
});
Route::group(['middleware' => ['auth', 'permission:editar_usuario']], function () {
  Route::get('/user/{user}', 'Backend\Auth\UserController@edit');

  Route::post('/user/{id}', 'Backend\Auth\UserController@update');
});
Route::group(['middleware' => ['auth', 'permission:eliminar_usuario']], function () {
  Route::get('/deleteuser/{id}', 'Backend\Auth\UserController@destroy');
});

Route::group(['middleware' => ['auth', 'permission:ver_permisos']], function () {
  Route::get('/permissions', 'Backend\Auth\PermissionController@index')->name('permissions.index');
});

Route::group(['middleware' => ['auth', 'permission:crear_permiso']], function () {
  Route::post('/permission', 'Backend\Auth\PermissionController@store');
});
Route::group(['middleware' => ['auth', 'permission:editar_permiso']], function () {
  Route::get('/permission/{permission}', 'Backend\Auth\PermissionController@edit');
  Route::post('/permission/{id}', 'Backend\Auth\PermissionController@update');
});

Route::group(['middleware' => ['auth', 'permission:eliminar_permiso']], function () {
  Route::get('/deletepermission/{id}', 'Backend\Auth\PermissionController@destroy');
});

Route::group(['middleware' => ['auth', 'permission:ver_roles']], function () {
  Route::get('/roles', 'Backend\Auth\RoleController@index')->name('roles.index');
});
Route::group(['middleware' => ['auth', 'permission:crear_rol']], function () {
  Route::post('/role', 'Backend\Auth\RoleController@store');
});

Route::group(['middleware' => ['auth', 'permission:editar_rol']], function () {
  Route::get('/role/{role}', 'Backend\Auth\RoleController@edit');
  Route::post('/role/{id}', 'Backend\Auth\RoleController@update');
});

Route::group(['middleware' => ['auth', 'permission:eliminar_rol']], function () {
  Route::get('/deleterole/{id}', 'Backend\Auth\RoleController@destroy');
});

Route::group(['middleware' => ['auth', 'permission:ver_categorias']], function () {
  Route::get('/categories', 'Backend\Category\CategoryController@index');
});

Route::group(['middleware' => ['auth', 'permission:crear_categorias']], function () {
  Route::post('/categories', 'Backend\Category\CategoryController@store');
});

Route::group(['middleware' => ['auth', 'permission:editar_categorias']], function () {
  Route::get('/category/{category}', 'Backend\Category\CategoryController@edit');
  Route::post('/category/{category}', 'Backend\Category\CategoryController@update');
});

Route::group(['middleware' => ['auth', 'permission:eliminar_categorias']], function () {
  Route::get('/deletecategory/{category}', 'Backend\Category\CategoryController@destroy');
});

//routes products

Route::group(['middleware' => ['auth', 'permission:ver_productos']], function () {
  Route::get('/products', 'Backend\Product\ProductController@index');
});

Route::group(['middleware' => ['auth', 'permission:crear_productos']], function () {
  Route::post('/products', 'Backend\Product\ProductController@store');
});

Route::group(['middleware' => ['auth', 'permission:editar_productos']], function () {
  Route::get('/product/{product}', 'Backend\Product\ProductController@edit');
  Route::post('/product/{product}', 'Backend\Product\ProductController@update');
});

Route::group(['middleware' => ['auth', 'permission:eliminar_productos']], function () {
  Route::get('/deleteproduct/{product}', 'Backend\Product\ProductController@destroy');
});

//routes clients

Route::group(['middleware' => ['auth', 'permission:ver_clientes']], function () {
  Route::get('/clients', 'Backend\Client\ClientController@index');
});

Route::group(['middleware' => ['auth', 'permission:crear_clientes']], function () {
  Route::post('/clients', 'Backend\Client\ClientController@store');
});

Route::group(['middleware' => ['auth', 'permission:editar_clientes']], function () {
  Route::get('/client/{client}', 'Backend\Client\ClientController@edit');
  Route::post('/client/{client}', 'Backend\Client\ClientController@update');
  Route::get('/exportInvoicesF/{client}', 'Backend\Client\ClientController@exportInvoicesF');
  Route::get('/exportInvoicesD/{client}', 'Backend\Client\ClientController@exportInvoicesD');
  Route::get('/exportInvoicesP/{client}', 'Backend\Client\ClientController@exportInvoicesP');
});

Route::group(['middleware' => ['auth', 'permission:eliminar_clientes']], function () {
  Route::get('/deleteclient/{client}', 'Backend\Client\ClientController@destroy');
});
