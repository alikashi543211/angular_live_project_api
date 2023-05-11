<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgetController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\CoursePostController;
use App\Http\Controllers\Api\EmployeeMasterController;
use App\Http\Controllers\Api\User\ProfileController;
use App\Http\Controllers\Api\Questinnaire\QuestionnaireController;
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

Route::prefix('employeeMaster')->group(function () {
    Route::controller(EmployeeMasterController::class)->group(function () {
        Route::post('employeeMasterStore', 'employeeMasterStore');
        Route::post('employeeMasterLogin', 'employeeMasterLogin');
    });
});
Route::prefix('coursePost')->group(function () {
    Route::controller(CoursePostController::class)->group(function () {
        Route::post('coursePostListing', 'coursePostListing');
        Route::post('coursePostDetail', 'coursePostDetail');
        Route::post('coursePostStore', 'coursePostStore');
        Route::post('coursePostUpdate', 'coursePostUpdate');
        Route::post('coursePostDelete', 'coursePostDelete');
    });
});
