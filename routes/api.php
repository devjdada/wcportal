<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Route::apiResource('area', App\Http\Controllers\AreaController::class);
// Route::apiResource('district', App\Http\Controllers\DistrictController::class);
// Route::apiResource('homecell', App\Http\Controllers\HomecellController::class);
// Route::apiResource('report_homecell', App\Http\Controllers\HomecellReportController::class);
// Route::apiResource('province', App\Http\Controllers\ProvinceController::class);
// Route::get('find_soul_phone/{id}', [App\Http\Controllers\SoulController::class, 'find_soul_phone']);
// Route::get('my_soul/{id}', [App\Http\Controllers\SoulController::class, 'my_soul']);
// Route::apiResource('unit', App\Http\Controllers\UnitController::class);
// Route::apiResource('unit_member', App\Http\Controllers\UnitMemberController::class);
// Route::apiResource('assign', App\Http\Controllers\AssignedController::class);
// Route::get('assignee/{id}', [App\Http\Controllers\AssignedController::class, 'assignee']);
// Route::get('assign_to/{id}', [App\Http\Controllers\AssignedController::class, 'assign_to']);
// Route::apiResource('soul_report', App\Http\Controllers\SoulReportController::class);
// Route::get('my_soul_report/{id}', [App\Http\Controllers\SoulReportController::class, 'my_report']);
// Route::get('contact_report/{id}', [App\Http\Controllers\SoulReportController::class, 'contact_report']);
// Route::apiResource('new_convert', App\Http\Controllers\NewConvertController::class);
// Route::apiResource('wsf_member', App\Http\Controllers\WsfMemberController::class);
// Route::apiResource('leadership', App\Http\Controllers\LeadershipController::class);
// Route::apiResource('wofbi', App\Http\Controllers\WofbiController::class);
// Route::apiResource('wofbi_course', App\Http\Controllers\WofbiCourseController::class);
// Route::apiResource('wofbi_student', App\Http\Controllers\WofbiStudentController::class);
// Route::apiResource('wofbi_result', App\Http\Controllers\WofbiResultController::class);
// Route::apiResource('testimony', App\Http\Controllers\TestimonyController::class);
// Route::get('testimony_dashboard', [App\Http\Controllers\TestimonyController::class, 'dashboard']);
// Route::apiResource('blog', App\Http\Controllers\BlogController::class);
// Route::apiResource('avatar', App\Http\Controllers\AvatarController::class);
// Route::apiResource('gallery', App\Http\Controllers\GalleryController::class);
// Route::apiResource('image', App\Http\Controllers\ImageController::class);
// Route::apiResource('image', App\Http\Controllers\ImageController::class);
// Route::apiResource('mp3', App\Http\Controllers\Mp3Controller::class);
// Route::apiResource('event', App\Http\Controllers\EventController::class);
// Route::apiResource('apartment', App\Http\Controllers\ApartmentController::class);
// Route::apiResource('apartment_staff', App\Http\Controllers\ApartmentStaffController::class);
// Route::apiResource('rent', App\Http\Controllers\RentController::class);
// Route::apiResource('apartment_complain', App\Http\Controllers\ApartmentComplainController::class);
// Route::apiResource('staff', App\Http\Controllers\StaffController::class);



Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });

    Route::get('user', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('user/{user}', [App\Http\Controllers\UserController::class, 'show']);
    Route::get('user-basic', [App\Http\Controllers\UserController::class, 'basic']);

    Route::get('station', [App\Http\Controllers\StationController::class, 'index']);
    Route::get('station/{station}', [App\Http\Controllers\StationController::class, 'show']);
    Route::get('station-basic', [App\Http\Controllers\StationController::class, 'basic']);
    Route::get('soul-basic/{station}', [App\Http\Controllers\SoulController::class, 'basic']);
    Route::get('station-contact/{station}', [App\Http\Controllers\SoulController::class, 'station_contact']);

    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('my-contact/{winner}', [App\Http\Controllers\SoulController::class, 'my_contact']);
    Route::apiResource('soul', App\Http\Controllers\SoulController::class);
    // Route::apiResource('homecell', App\Http\Controllers\HomecellController::class);
});
Route::apiResource('homecell', App\Http\Controllers\HomecellController::class);

Route::get('homecell-basic', [App\Http\Controllers\HomecellController::class, 'basic']);

Route::get('homecell-contact/{homecell}', [App\Http\Controllers\HomecellController::class, 'homecell_contact']);


Route::get('/import', [\App\Http\Controllers\ExcelController::class, 'import']);

use Illuminate\Support\Facades\Storage;

Route::get('/download-file', function () {
    $path = "https://download.microsoft.com/download/1/4/E/14EDED28-6C58-4055-A65C-23B4DA81C4DE/Financial%20Sample.xlsx";
    $done =  Storage::disk('local')->put('/data.xlsx', file_get_contents($path));
    return $done;
});
