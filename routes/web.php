<?php

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

#FrontEnd Location

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Product;
use App\Products_model;

Route::get('/homeIndex', function () {

    return view('page.homeIndex');
});
Route::get('/homeIndex', function () {
    $products = Product::all();
    // $products = Product::where('category_id', 1)->get();
    return view('page.homeIndex', compact('products'));
});
// Route::get('/','IndexController@index');

Route::get('/product-detail/{id}', function ($id) {
    $pro = Products_model::find($id);
    return view('page.product-detail', compact('pro'));
});
Route::get('/contact_us', function () {
    return view('page.contact');
});
Route::get('/user-profile', function () {
    return view('page.cart');
});
Route::get('/user-profile', function () {
    return view('page.user-profile');
});
Route::get('/category', function () {
    return view('page.category');
});
Route::get('/cart', function () {
    return view('page.cart');
});
Route::get('/about_us/me', function () {
    return view('page.about');
});
Route::get('/checkout', function () {
    return view('page.checkout');
});
//Updating Profile route for Registered User

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserProfilePublic@userProfile']);

Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserProfilePublic@updateProfileUser']);

Route::patch('users/{user}/updateImage',  ['as' => 'users.updateImage', 'uses' => 'UserProfilePublic@updateImageUser']);

Route::patch('users/{user}/updatePasswordUser',  ['as' => 'users.updatePasswordUser', 'uses' => 'UserProfilePublic@updateUserPassword']);

#Admin Location

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'auth.admin']], function () {

    Route::get('/', function () {

        return view('admin.dashboard');
    });

    Route::get('/product_detail', function () {

        return view('admin.product.product_detail');
    });

    Route::resource('product', 'ProductController');

    Route::resource('category', 'CategoriesController');

    //testing convert report to excel ...
    Route::get('/report', function () {

        return view('admin.report.report');
    });

    //testing convert report to excel ...
    Route::get('/ordering', function () {

        return view('admin.ordering.ordering_product');
    });

    #namespace specify the folder containing UserController
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

        Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);

        Route::resource('/user_profile', 'UserProfileController');
    });
});
