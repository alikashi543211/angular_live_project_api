<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgetController;
use App\Http\Controllers\Api\Auth\RegisterController;
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

Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('logout', 'logout');
    });
    Route::controller(RegisterController::class)->group(function () {
        Route::post('register', 'register');
        Route::post('verifyEmailVerificationCode', 'verifyEmailVerificationCode');
        Route::post('verificationCodeResend', 'verificationCodeResend');
    });
    Route::controller(ForgetController::class)->group(function () {
        Route::post('forgetPasswordMail', 'forgetPasswordMail');
        Route::post('verifyResetCode', 'verifyResetCode');
        Route::post('resetPassword', 'resetPassword');
    });
});

Route::prefix('questionnaire')->group(function () {
    Route::controller(QuestionnaireController::class)->group(function () {
        Route::get('questionnaireListing', 'questionnaireListing');
    });
});

Route::middleware(['auth:sanctum'])->prefix('user')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('getUser', 'getUser');
            Route::post('storeQuestionnaire', 'storeQuestionnaire');
            Route::post('updatePassword', 'updatePassword');
        });
    });
});
