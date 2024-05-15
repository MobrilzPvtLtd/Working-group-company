<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LanguageController;
use PhpParser\Builder\Namespace_;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\ServicesprovidersController;
use App\Livewire\Privacy;
use App\Livewire\Terms;
use Illuminate\Support\Facades\Route;

/*
*
* Auth Routes
*
* --------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/

// home route
Route::get('home', [FrontendController::class, 'index'])->name('home');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('service', [FrontendController::class, 'service'])->name('service');
Route::get('portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('pages', [FrontendController::class, 'pages'])->name('pages');
Route::get('news', [FrontendController::class, 'news'])->name('news');
Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');
Route::get('lang', [FrontendController::class, 'lang'])->name('lang');


// Route::get('lang/home', [LangController::class, 'index'])->name('lang/home');
// Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('home', [BackendController::class, 'index'])->name('home');
Route::get('dashboard', [BackendController::class, 'index'])->name('dashboard');






Route::get('language/{language}', [LanguageController::class, 'switch'])->name('language.switch');


Route::get('terms', Terms::class)->name('terms');
Route::get('privacy', Privacy::class)->name('privacy');

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/edit', ['as' => "{$module_name}.profileEdit", 'uses' => "{$controller_name}@profileEdit"]);
        Route::patch('profile/edit', ['as' => "{$module_name}.profileUpdate", 'uses' => "{$controller_name}@profileUpdate"]);
        Route::get('profile/changePassword', ['as' => "{$module_name}.changePassword", 'uses' => "{$controller_name}@changePassword"]);
        Route::patch('profile/changePassword', ['as' => "{$module_name}.changePasswordUpdate", 'uses' => "{$controller_name}@changePasswordUpdate"]);
        Route::get('profile/{username?}', ['as' => "{$module_name}.profile", 'uses' => "{$controller_name}@profile"]);
        Route::get("{$module_name}/emailConfirmationResend", ['as' => "{$module_name}.emailConfirmationResend", 'uses' => "{$controller_name}@emailConfirmationResend"]);
        Route::delete("{$module_name}/userProviderDestroy", ['as' => "{$module_name}.userProviderDestroy", 'uses' => "{$controller_name}@userProviderDestroy"]);
    });
});

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['can:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("{$module_name}", "{$controller_name}@index")->name("{$module_name}");
        Route::post("{$module_name}", "{$controller_name}@store")->name("{$module_name}.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("{$module_name}", ['as' => "{$module_name}.index", 'uses' => "{$controller_name}@index"]);
    Route::get("{$module_name}/markAllAsRead", ['as' => "{$module_name}.markAllAsRead", 'uses' => "{$controller_name}@markAllAsRead"]);
    Route::delete("{$module_name}/deleteAll", ['as' => "{$module_name}.deleteAll", 'uses' => "{$controller_name}@deleteAll"]);
    Route::get("{$module_name}/{id}", ['as' => "{$module_name}.show", 'uses' => "{$controller_name}@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("{$module_name}", ['as' => "{$module_name}.index", 'uses' => "{$controller_name}@index"]);
    Route::get("{$module_name}/create", ['as' => "{$module_name}.create", 'uses' => "{$controller_name}@create"]);
    Route::get("{$module_name}/download/{file_name}", ['as' => "{$module_name}.download", 'uses' => "{$controller_name}@download"]);
    Route::get("{$module_name}/delete/{file_name}", ['as' => "{$module_name}.delete", 'uses' => "{$controller_name}@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("{$module_name}", "{$controller_name}");

    
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("{$module_name}/emailConfirmationResend/{id}", ['as' => "{$module_name}.emailConfirmationResend", 'uses' => "{$controller_name}@emailConfirmationResend"]);
    Route::delete("{$module_name}/userProviderDestroy", ['as' => "{$module_name}.userProviderDestroy", 'uses' => "{$controller_name}@userProviderDestroy"]);
    Route::get("{$module_name}/changePassword/{id}", ['as' => "{$module_name}.changePassword", 'uses' => "{$controller_name}@changePassword"]);
    Route::patch("{$module_name}/changePassword/{id}", ['as' => "{$module_name}.changePasswordUpdate", 'uses' => "{$controller_name}@changePasswordUpdate"]);
    Route::get("{$module_name}/trashed", ['as' => "{$module_name}.trashed", 'uses' => "{$controller_name}@trashed"]);
    Route::patch("{$module_name}/trashed/{id}", ['as' => "{$module_name}.restore", 'uses' => "{$controller_name}@restore"]);
    Route::get("{$module_name}/index_data", ['as' => "{$module_name}.index_data", 'uses' => "{$controller_name}@index_data"]);
    Route::get("{$module_name}/index_list", ['as' => "{$module_name}.index_list", 'uses' => "{$controller_name}@index_list"]);
    Route::resource("{$module_name}", "{$controller_name}");
    Route::patch("{$module_name}/{id}/block", ['as' => "{$module_name}.block", 'uses' => "{$controller_name}@block", 'middleware' => ['can:block_users']]);
    Route::patch("{$module_name}/{id}/unblock", ['as' => "{$module_name}.unblock", 'uses' => "{$controller_name}@unblock", 'middleware' => ['can:block_users']]);

    
    
    Route::get('services', [ServicesController::class, 'index'])->name('services');
    Route::get('services/create', [ServicesController::class, 'Form']);
    Route::post('services/create', [ServicesController::class, 'create']);
    Route::get('services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::patch('services/{service}', [ServicesController::class, 'update'])->name('services.update');

    Route::delete('services/destroy/{id}', [ServicesController::class, 'destroy'])->name('destroy');


    

    // Route::get('provider', [ServicesprovidersController::class, 'index'])->name('services');
    // Route::get('provider/create', [ServicesprovidersController::class, 'Form']);
    // Route::post('provider/create', [ServicesprovidersController::class, 'create']);
    // Route::get('provider/edit/{id}', [ServicesprovidersController::class, 'edit']);
    // Route::put('provider/update/{id}', [ServicesprovidersController::class, 'update'])->name('update');
    // Route::delete('provider/destroy/{id}', [ServicesprovidersController::class, 'destroy'])->name('destroy');






});




