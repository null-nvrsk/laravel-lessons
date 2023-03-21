<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceTypeController;
use App\Http\Controllers\WorkplaceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/devices', [DeviceController::class, 'index']);

Route::get('/device-types', [DeviceTypeController::class, 'index']);

Route::get('/workplaces', [WorkplaceController::class, 'index']);

Route::get('/locations', [LocationController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/positions', [PositionController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);




