<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\studentGate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// 

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/search', [App\Http\Controllers\PublicController::class, 'search'])->name('search.index');

Route::get('/reset_password', [App\Http\Controllers\PublicController::class, 'reset_password'])->name('reset_password.index');
Route::post('/reset_password', [App\Http\Controllers\PublicController::class, 'reset_'])->name('reset_password');
Route::post('/new_password', [App\Http\Controllers\PublicController::class, 'new_password'])->name('new_password');

Route::get('/set_password', [App\Http\Controllers\PublicController::class, 'set_password'])->name('set_password.index');


Route::post('/set_password', [App\Http\Controllers\PublicController::class, 'set_new_password'])->name('set_password');

Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('index');

Route::get('/about', [App\Http\Controllers\PublicController::class, 'about'])->name('about');
Route::get('/activate_account', [App\Http\Controllers\HomeController::class, 'resent_active_account_email'])->name('resent_active_account_email');
Route::get('/delete_account', [App\Http\Controllers\HomeController::class, 'delete_account'])->name('delete_account');
Route::post('/search', [App\Http\Controllers\PublicController::class, 'search_request'])->name('search.request');
Route::get('/email_activation/{email}', [App\Http\Controllers\HomeController::class, 'email_activation'])->name('email_activation');
Route::post('/personal_information', [App\Http\Controllers\StudentController::class, 'personal_information'])->name('personal_information');
Route::post('/research_project', [App\Http\Controllers\StudentController::class, 'research_project'])->name('research_project');
Route::post('/change_password', [App\Http\Controllers\StudentController::class, 'change_password'])->name('change_password');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index_auth'])->name('dashboard');

Route::get('/supervisor_confirmation/{reference_email}/{research_reference}', [App\Http\Controllers\StudentController::class, 'supervisor_confirmation'])->name('supervisor_confirmation');


Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'Gate'])->name('home');


Route::group(['middleware' => ['adminGate']], function () {
});

Route::get('/profile', [App\Http\Controllers\StudentController::class, 'profile_student'])->name('profile');


Route::get('/ar_microscope', [App\Http\Controllers\StudentController::class, 'ar_microscope'])->name('ar_microscope');



// Route::middleware(['studentGate'])->group(function() {   


Route::group(['middleware' => ['studentGate']], function () {

    Route::get('/index', [App\Http\Controllers\StudentController::class, 'index'])->name('index_student');
    Route::get('/all_asset_available/{cat_reference}', [App\Http\Controllers\AssetController::class, 'asset_available'])->name('index.asset_available');
    Route::get('/rent_space_available', [App\Http\Controllers\AssetController::class, 'rent_space_available'])->name('index.rent_space_available');
    Route::post('/rent_space_available', [App\Http\Controllers\AssetController::class, 'look_space_rent_based_on_user'])->name('look_space_rent_based_on_user');
    Route::get('/rent_space_available/preview_rent_space_available/{reference}', [App\Http\Controllers\AssetController::class, 'preview_rent_space_available'])->name('index.preview_rent_space_available');
    Route::post('/rent_space_available/preview_rent_space_available/{reference_space}/{owner_reference}/sent_request', [App\Http\Controllers\AssetController::class, 'send_request'])->name('send_request');

    Route::get('/all_asset_available/asset_preview/{asset_selecte_reference}', [App\Http\Controllers\AssetController::class, 'asset_preview'])->name('index.asset_preview');


    Route::get('/dashboard/asset_requested', [App\Http\Controllers\AssetController::class, 'asset_requested'])->name('dashboard.asset_requested');
    Route::get('/my_student', [App\Http\Controllers\AssetController::class, 'my_student'])->name('my_student');
    Route::get('/my_student/{reference}/{feedback}', [App\Http\Controllers\AssetController::class, 'my_student_feedback'])->name('my_student.feedback');


    Route::get('/dashboard/asset_requested/update/{asset_reference}/{status}', [App\Http\Controllers\AssetController::class, 'request_asset_update'])->name('dashboard.asset_requested.status');
    Route::get('/dashboard/space_requested/update/{space_reference}/{status}', [App\Http\Controllers\AssetController::class, 'request_space_update'])->name('dashboard.space_requested.status');

    Route::get('/view_asset_requested', [App\Http\Controllers\StudentController::class, 'view_asset_requested'])->name('view_asset_requested');


    Route::get('/view_space_requested', [App\Http\Controllers\StudentController::class, 'view_space_requested'])->name('view_space_requested');
    Route::get('/space_requested', [App\Http\Controllers\StaffController::class, 'view_space_requested_'])->name('view_space_requested.owner');




    Route::get('/dashboard/my_asset/category_chemical', [App\Http\Controllers\StaffController::class, 'add_request__list_chemical'])->name('add_request__list_chemical');

    Route::get('/dashboard/my_asset/category_equipment', [App\Http\Controllers\StaffController::class, 'add_request__list_asset'])->name('add_request__list_asset');
    Route::post('/all_asset_available/asset_preview/{asset_selecte_reference}/requested', [App\Http\Controllers\AssetController::class, 'asset_request_process'])->name('asset_request_process');

    Route::post('/dashboard/my_asset/category_equipment/form_modify_chemical/{reference}', [App\Http\Controllers\AssetController::class, 'modify_chemical'])->name('modify_chemical');


    Route::get('/dashboard/my_asset', [App\Http\Controllers\StaffController::class, 'categoty'])->name('category');

    Route::get('/dashboard/my_asset/category_equipment/form_add_equipment', [App\Http\Controllers\StaffController::class, 'form_add_equipment'])->name('form_add_equipment');

    Route::post('/dashboard/my_asset/category_equipment/form_add_equipment', [App\Http\Controllers\AssetController::class, 'add_equipment'])->name('add_equipment');

    Route::post('/dashboard/my_asset/category_equipment/form_add_chemical', [App\Http\Controllers\AssetController::class, 'add_chemical'])->name('add_chemical');

    Route::get('/dashboard/my_asset/category_equipment/form_add_chemical', [App\Http\Controllers\StaffController::class, 'form_add_chemical'])->name('form_add_chemical');

    Route::post('/dashboard/my_asset/category_equipment/form_add_space_rent', [App\Http\Controllers\AssetController::class, 'add_space_rent'])->name('add_space_rent');

    Route::get('/dashboard/my_asset/category_equipment/form_add_space_rent', [App\Http\Controllers\StaffController::class, 'form_add_space_rent'])->name('form_add_space_rent');

    Route::get('/history', [App\Http\Controllers\AssetController::class, 'history'])->name('history');
    Route::get('/message', [App\Http\Controllers\AssetController::class, 'message'])->name('message');
});
