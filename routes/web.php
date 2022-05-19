<?php
hii
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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/terms-and-conditions', 'HomeController@terms')->name('terms');
Route::get('/privacy-policy', 'HomeController@terms')->name('privacy');
Route::get('/about', 'HomeController@terms')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/search-property', 'SearchProperty@index')->name('search-property');
Route::post('/do-contact-us', 'HomeController@do_contact_us')->name('do-contact-us');

Route::middleware(['guest' , 'preventBack'])->group(function () 
{
    Route::get('login', 'AuthController@loginView')->name('login');
    Route::get('forgot', 'AuthController@forgotView')->name('forgot');
    Route::get('register', 'AuthController@registerView')->name('register');
    Route::post('/do-register', 'AuthController@doRegister')->name('do-register');
    Route::post('/do-forgot', 'AuthController@doForgot')->name('do-forgot');
    Route::post('/send-otp', 'AuthController@sendOtp')->name('send-otp');
    Route::post('/do-login', 'AuthController@doLogin')->name('do-login');
});  

Route::namespace('User')->prefix('user')->name('user.')->group(function()
{
    Route::middleware(['auth' , 'preventBack'])->group(function () {
        Route::get('dashboard', 'User@dashboard')->name('dashboard');
        Route::post('do-update-profile', 'User@doUpdateProfile')->name('do-update-profile');
        Route::post('do-update-image', 'User@doUpdateImage')->name('do-update-image');
        Route::post('do-change-password', 'User@doChangePassword')->name('do-change-password');
        Route::get('logout', 'User@logout')->name('logout');
        Route::get('add-property', 'PostProperty@index')->name('add-property');
    });    
    
});








Route::get('/admin', function () {
    return redirect('admin/login');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login', 'AuthController@login')->name('login');
        Route::post('login', 'AuthController@authenticateAdmin')->name('adminlogin');
        Route::get('logout', 'AuthController@destroy')->name('logout');
    });

    Route::middleware('admin')->group(function() {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        Route::post('update-password', 'Auth\AuthController@updatePassword')->name('password.update');
        Route::get('edit-profile', 'Auth\AuthController@editProfile')->name('edit-profile');
        Route::post('update-profile', 'Auth\AuthController@updateProfile')->name('profile.update');

        Route::get('user-list', 'UserController@userList')->name('user-list');
        Route::get('block-unblock', 'UserController@blockUnblock')->name('block-unblock');

        // Route::get('client-list', 'ClientController@clientList')->name('client-list');
        Route::get('property-list', 'PropertyController@propertyList')->name('property-list');
        Route::post('make-featured', 'PropertyController@makeFeatured')->name('make-featured');

        Route::get('add-property', 'PropertyController@addProperty')->name('add-property');
        Route::get('category-list', 'PropertyController@categoryList')->name('category-list');

        Route::get('plans-list', 'PlansController@index')->name('plans-list');
        Route::post('update-plans', 'PlansController@updatePlans')->name('update-plans');

        Route::get('addons-list', 'AddonsController@index')->name('addons-list');
        Route::post('update-addons', 'AddonsController@updateAddons')->name('update-addons');

        Route::get('contact-type-list', 'ContactController@contatTypeList')->name('contact-type-list');
        Route::post('add-contact-type', 'ContactController@addContactType')->name('add-contact-type');
        Route::post('update-contact-type', 'ContactController@updateContactType')->name('update-contact-type');
        Route::post('del-contact-type', 'ContactController@delContatType')->name('del-contact-type');

        Route::get('contact-us-list', 'ContactController@contatUsList')->name('contact-us-list');


        Route::get('animities-list', 'AnimitiesController@index')->name('animities-list');
        Route::post('add-animities', 'AnimitiesController@addAnimities')->name('add-animities');
        Route::post('update-animities', 'AnimitiesController@updateAnimities')->name('update-animities');
        Route::post('del-animities', 'AnimitiesController@delAnimities')->name('del-animities');



    });
    
});

