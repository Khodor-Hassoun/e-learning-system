<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('register', [AuthController::class, 'register']);
    Route::post('me', 'AuthController@me');

});
Route::get('/test', [TestController::class, 'getUsers']);
Route::post('/add/teacher', [TestController::class, 'createInstructor']);
Route::get('/add/courses', [TestController::class, 'getCourses']);
Route::post('/add', [CourseController::class, 'addCourse']);
Route::get('/get/{id}', [CourseController::class, 'getCourse']);
Route::get('/add/{id}', [CourseController::class, 'addUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
