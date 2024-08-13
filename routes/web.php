<?php

use App\Http\Controllers\SMS;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Blog\CreateBlog;
use App\Livewire\Blog\ManageBlog;
use App\Livewire\Contacts\AddMyContact;
use App\Livewire\Contacts\AllContacts;
use App\Livewire\Contacts\EditMyContact;
use App\Livewire\Contacts\MyContact;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Debug\Wsf;
use App\Livewire\Gallery\AddImage;
use App\Livewire\Gallery\CreateGallery;
use App\Livewire\Gallery\Galleries;
use App\Livewire\Image\Post;
use App\Livewire\Sms\SmsIndex;
use App\Livewire\Soul\Assigned;
use App\Livewire\Soul\Assigning;
use App\Livewire\Soul\FirstTimert;
use App\Livewire\Soul\MyAssigned;
use App\Livewire\Soul\NewConvert;
use App\Livewire\Soul\SoulStats;
use App\Livewire\Testy\CreateTesty;
use App\Livewire\Testy\ManageTesty;
use App\Livewire\Unit\ManageUnit;
use App\Livewire\Users\ManageUsers;
use App\Livewire\Workers\OrdainedWorkers;
use App\Livewire\Workers\OwPosting;
use App\Livewire\Workers\PostingLocation;
use App\Livewire\Wsf\HomecellIndex;
use App\Livewire\Wsf\HomecellReport;
use App\Livewire\Wsf\HrStatistics;
use App\Livewire\Wsf\ManageWsf;
use App\Livewire\Wsf\YetToSubmit;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/debug-wsf', Wsf::class)->name('debug-wsf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/my_contact', MyContact::class)->name('my_contact');
    Route::get('/my-assigned', MyAssigned::class)->name('my-assigned');
    Route::get('/add_my_contact', AddMyContact::class)->name('add_my_contact');
    Route::get('/edit-contact/{contactId}', EditMyContact::class)->name('edit-contact');
    Route::get('/manage-users', ManageUsers::class)->name('manage-users');
    Route::get('/manage-wsf', ManageWsf::class)->name('manage-wsf');
    Route::get('/homecell-report', HomecellReport::class)->name('homecell-report');
    Route::get('/yet-to-submit', YetToSubmit::class)->name('yet-to-submit');
    Route::get('/hr-sta', HrStatistics::class)->name('hr-sta');
    Route::get('/soul-stats', SoulStats::class)->name('soul-stats');
    Route::get('/first-timer', FirstTimert::class)->name('first-timer');
    Route::get('/new-convert', NewConvert::class)->name('new-convert');
    Route::get('/manage-sms', SmsIndex::class)->name('manage-sms');
    Route::get('/assign-contact', Assigned::class)->name('assign-contact');
    Route::get('/assigning-contact', Assigning::class)->name('assigning-contact');
    Route::get('/manage-unit', ManageUnit::class)->name('manage-unit');
    Route::get('/homecells', HomecellIndex::class)->name('homecells');
    Route::get('/upload-image', Post::class)->name('upload-image');
    Route::get('/create-gallery', CreateGallery::class)->name('create-gallery');
    Route::get('/add-image', AddImage::class)->name('add-image');
    Route::get('/galleries', Galleries::class)->name('galleries');
    Route::get('/create-testy', CreateTesty::class)->name('create-testy');
    Route::get('/manage-testy', ManageTesty::class)->name('manage-testy');
    Route::get('/manage-blog', ManageBlog::class)->name('manage-blog');
    Route::get('/create-blog', CreateBlog::class)->name('create-blog');
    Route::get('/ordained-worker', OrdainedWorkers::class)->name('ordained-worker');
    Route::get('/posting-location', PostingLocation::class)->name('posting-location');
    Route::get('/ow-posting', OwPosting::class)->name('ow-posting');
    Route::get('/all-contacts', AllContacts::class)->name('all-contacts');
});




Route::get('/clear-cache', function () {
    $return =  Artisan::call('cache:clear');
    dd($return);
});

Route::get('/storage-link', function () {
    $targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
    dd('Symlink process successfully completed');
});

Route::get('/artisan-migrate-refresh', function () {
    $return =  Artisan::call('migrate:refresh ');
    dd($return);
});

Route::get('/artisan-migrate', function () {
    $return =  Artisan::call('migrate');
    return $return;
});
