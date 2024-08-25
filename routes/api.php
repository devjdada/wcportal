<?php

use App\Http\Controllers\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('get-sms', [App\Http\Controllers\TextMessage::class, 'get_sms']);
Route::get('get-sms', [App\Http\Controllers\TextMessage::class, 'get_sms']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout']);

    Route::get('me', [App\Http\Controllers\UserController::class, 'me']);
    Route::get('user', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('user/{user}', [App\Http\Controllers\UserController::class, 'show']);
    Route::put('user/{user}', [App\Http\Controllers\UserController::class, 'update']);
    Route::get('user-basic', [App\Http\Controllers\UserController::class, 'basic']);

    Route::get('station', [App\Http\Controllers\StationController::class, 'index']);
    Route::get('station/{station}', [App\Http\Controllers\StationController::class, 'show']);

    Route::get('soul-basic/{station}', [App\Http\Controllers\SoulController::class, 'basic']);
    Route::get('station-contact/{station}', [App\Http\Controllers\SoulController::class, 'station_contact']);

    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('my-contact/{winner}', [App\Http\Controllers\SoulController::class, 'my_contact']);
    Route::get('my-assigned/{assign_to}', [App\Http\Controllers\AssignedController::class, 'my_assigned']);
    Route::apiResource('soul', App\Http\Controllers\SoulController::class);
    Route::apiResource('unit', App\Http\Controllers\UnitController::class);
    Route::apiResource('unit-member', App\Http\Controllers\UnitMemberController::class);
    Route::get('my-contact-report/{id}', [App\Http\Controllers\SoulReportController::class, 'my_report']);
    Route::get('station-homecell/{homecell}', [App\Http\Controllers\HomecellController::class, 'station_hc']);
    Route::get('homecell-contact/{homecell}', [App\Http\Controllers\HomecellController::class, 'homecell_contact']);
    Route::apiResource('homecell', App\Http\Controllers\HomecellController::class);
    Route::apiResource('wsf-member', App\Http\Controllers\WsfMemberController::class);
    Route::apiResource('soul-report', App\Http\Controllers\SoulReportController::class);
    Route::apiResource('wsf-report', App\Http\Controllers\HomecellReportController::class);
    Route::apiResource('testimony', App\Http\Controllers\TestimonyController::class);
    Route::apiResource('blog', App\Http\Controllers\BlogController::class);
    Route::apiResource('gallery', App\Http\Controllers\GalleryController::class);
});

Route::get('homecell-basic', [App\Http\Controllers\HomecellController::class, 'basic']);
Route::get('station-basic', [App\Http\Controllers\StationController::class, 'basic']);

Route::get('my_db_posting/{user}', [App\Http\Controllers\OwPostingController::class, 'my_posting']);
