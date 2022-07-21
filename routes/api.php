<?php

use App\Http\Controllers\ApiControllers\ApiDishesController;
use App\Http\Controllers\ApiControllers\ApiRestourantsController;
use App\Http\Controllers\ApiControllers\ApiReviewsController;
use App\Http\Controllers\AuthController;
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


Route::group(['prefix' => 'v1'],function (){
    Route::resource('/restourants', ApiRestourantsController::class);
    Route::resource('/dishes', ApiDishesController::class);
    Route::resource('/reviews', ApiReviewsController::class);
    Route::get('/reviews/avg/{id}', [ApiReviewsController::class,'avgDishReview']);
    Route::get('/reviews/count/{id}', [ApiReviewsController::class,'reviewsCount']);
    Route::get('/reviews/all/{id}', [ApiReviewsController::class,'reviewsAll']);
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
    
    });
    
});

// Route::group(['prefix' => 'v2'],function (){
//     Route::resource('/customers', CustomerController::class);
//     Route::resource('/towns', TownController::class);
//     Route::resource('/countries', CountryController::class);

// });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
