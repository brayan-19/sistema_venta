<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\BillController;



route::get('/categories',[CategoryController::class,'index'])
    ->name('categories.index');

route::get('/categories/create',[CategoryController::class,'create'])
    ->name('categories.create');

route::post('/categories/create',[CategoryController::class,'store'])
    ->name('categories.create');

route::get('/categories/edit/{category}',[CategoryController::class,'edit'])
    ->name('categories.edit');

route::post('/categories/edit/{category}',[CategoryController::class,'update'])
    ->name('categories.edit');

route::post('/categories/delete/{category}',[CategoryController::class,'destroy'])
    ->name('categories.delete');


route::get('/products',[ProductController::class,'index'])
    ->name('products.index');

route::get('/products/create',[ProductController::class,'create'])
    ->name('products.create');

route::post('/products/create',[ProductController::class,'store'])
    ->name('products.create');

route::get('/products/edit/{product}',[ProductController::class,'edit'])
    ->name('products.edit');

route::post('/products/edit/{product}',[ProductController::class,'update'])
    ->name('products.edit');

route::post('/products/delete/{product}',[ProductController::class,'destroy'])
    ->name('products.delete');


route::get('/departments',[DepartmentController::class,'index'])
    ->name('departments.index');

route::get('/departments/create',[DepartmentController::class,'create'])
    ->name('departments.create');

route::post('/departments/create',[DepartmentController::class,'store'])
    ->name('departments.create');

route::get('/departments/edit/{department}',[DepartmentController::class,'edit'])
    ->name('departments.edit');

route::post('/departments/edit/{department}',[DepartmentController::class,'update'])
    ->name('departments.edit');

route::post('/departments/delete/{department}',[DepartmentController::class,'destroy'])
    ->name('departments.delete');


Route::get('/cities', [CityController::class, 'index'])
    ->name('cities.index');

Route::get('/cities/create', [CityController::class, 'create'])
    ->name('cities.create');

Route::post('/cities/create', [CityController::class, 'store'])
    ->name('cities.create');

Route::get('/cities/edit/{city}', [CityController::class, 'edit'])
    ->name('cities.edit');

Route::post('/cities/edit/{city}', [CityController::class, 'update'])
    ->name('cities.edit');

Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])
    ->name('cities.delete');


Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers.index');

Route::get('/customers/create', [CustomerController::class, 'create'])
    ->name('customers.create');

Route::post('/customers/create', [CustomerController::class, 'store'])
    ->name('customers.create');

Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])
    ->name('customers.edit');

Route::post('/customers/edit/{customer}', [CustomerController::class, 'update'])
    ->name('customers.edit');

Route::post('/customers/delete/{customer}', [CustomerController::class, 'destroy'])
    ->name('customers.delete');


Route::get('/employees', [EmployeesController::class, 'index'])
    ->name('employees.index');

Route::get('/employees/create', [EmployeesController::class, 'create'])
    ->name('employees.create');

Route::post('/employees/create', [EmployeesController::class, 'store'])
    ->name('employees.create');

Route::get('/employees/edit/{employees}', [EmployeesController::class, 'edit'])
    ->name('employees.edit');

Route::post('/employees/edit/{employees}', [EmployeesController::class, 'update'])
    ->name('employees.edit');

Route::post('/employees/delete/{employees}', [EmployeesController::class, 'destroy'])
    ->name('employees.delete');


Route::get('providers/', [ProvidersController::class, 'index'])
    ->name('providers.index');

Route::get('/providers/create', [ProvidersController::class, 'create'])
    ->name('providers.create');

Route::post('/providers/create', [ProvidersController::class, 'store'])
    ->name('providers.create');

Route::get('/providers/edit/{provider}', [ProvidersController::class, 'edit'])
    ->name('providers.edit');

Route::post('/providers/edit/{provider}', [ProvidersController::class, 'update'])
    ->name('providers.edit');

Route::post('/providers/delete/{provider}', [ProvidersController::class, 'destroy'])
    ->name('providers.delete');



Route::get('bills/', [BillController::class, 'index'])
    ->name('bills.index');

Route::get('/bills/create', [BillController::class, 'create'])
    ->name('bills.create');

Route::post('/bills/create', [BillController::class, 'store'])
    ->name('bills.create');

Route::get('/bills/edit/{bill}', [BillController::class, 'edit'])
    ->name('bills.edit');

Route::post('/bills/edit/{bill}', [BillController::class, 'update'])
    ->name('bills.edit');

Route::post('/bills/delete/{bill}', [BillController::class, 'destroy'])
    ->name('bills.delete');






Route::get('/', function () {
    return view('welcome');
});
