
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\api\v1\user\UserController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/login', 'App\Http\Controllers\api\v1\user\UserController@login');
// Route::post('register', 'App\Http\Controllers\api\v1\user\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
// Route::post('details', 'App\Http\Controllers\api\v1\user\UserController@details');
// });

//Users Passport Route
Route::prefix('/user')->group(function() {
    Route::post('/login', [LoginController::class, 'login']);
    Route::middleware('auth:api')->get('/all', [UserController::class, 'index']);
});



//Rivers Routes
Route::prefix('/river')->group(function() {
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\api\v1\river\RiverController@index');
    Route::middleware('auth:api')->post('/store', 'App\Http\Controllers\api\v1\river\RiverController@store');
    Route::middleware('auth:api')->get('/show/{id}', 'App\Http\Controllers\api\v1\river\RiverController@show');
    Route::middleware('auth:api')->put('/{id}', 'App\Http\Controllers\api\v1\river\RiverController@update');
    Route::middleware('auth:api')->delete('/{id}', 'App\Http\Controllers\api\v1\river\RiverController@destroy');
});
Route::post('/rivers', 'App\Http\Controllers\api\v1\river\RiverController@store');
Route::get('/rivers', 'App\Http\Controllers\api\v1\river\RiverController@show');
Route::get('/rivers/{id}', 'App\Http\Controllers\api\v1\river\RiverController@detail');
Route::put('/rivers/{id}', 'App\Http\Controllers\api\v1\river\RiverController@update');
Route::delete('/rivers/{id}', 'App\Http\Controllers\api\v1\river\RiverController@destroy');