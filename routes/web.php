<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homedental');
});

Route::get('/status', function () {
    return view('status');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('services')->name('services/')->group(static function() {
            Route::get('/',                                             'ServicesController@index')->name('index');
            Route::get('/create',                                       'ServicesController@create')->name('create');
            Route::post('/',                                            'ServicesController@store')->name('store');
            Route::get('/{service}/edit',                               'ServicesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServicesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{service}',                                   'ServicesController@update')->name('update');
            Route::delete('/{service}',                                 'ServicesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('patients')->name('patients/')->group(static function() {
            Route::get('/',                                             'PatientsController@index')->name('index');
            Route::get('/create',                                       'PatientsController@create')->name('create');
            Route::post('/',                                            'PatientsController@store')->name('store');
            Route::get('/{patient}/edit',                               'PatientsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PatientsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{patient}',                                   'PatientsController@update')->name('update');
            Route::delete('/{patient}',                                 'PatientsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('appointments')->name('appointments/')->group(static function() {
            Route::get('/',                                             'AppointmentsController@index')->name('index');
            Route::get('/create',                                       'AppointmentsController@create')->name('create');
            Route::post('/',                                            'AppointmentsController@store')->name('store');
            Route::get('/{appointment}/edit',                           'AppointmentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AppointmentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{appointment}',                               'AppointmentsController@update')->name('update');
            Route::delete('/{appointment}',                             'AppointmentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('schedules')->name('schedules/')->group(static function() {
            Route::get('/',                                             'SchedulesController@index')->name('index');
            Route::get('/create',                                       'SchedulesController@create')->name('create');
            Route::post('/',                                            'SchedulesController@store')->name('store');
            Route::get('/{schedule}/edit',                              'SchedulesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SchedulesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{schedule}',                                  'SchedulesController@update')->name('update');
            Route::delete('/{schedule}',                                'SchedulesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('feedback')->name('feedback/')->group(static function() {
            Route::get('/',                                             'FeedbacksController@index')->name('index');
            Route::get('/create',                                       'FeedbacksController@create')->name('create');
            Route::post('/',                                            'FeedbacksController@store')->name('store');
            Route::get('/{feedback}/edit',                              'FeedbacksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FeedbacksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{feedback}',                                  'FeedbacksController@update')->name('update');
            Route::delete('/{feedback}',                                'FeedbacksController@destroy')->name('destroy');
        });
    });
});