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

// Route::group(['namespace' => 'App\Http\Controllers'], function () {
//     Route::get('/test', 'DashboardController@index');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('unicode', function () {
//     return view('form');
// });
// Route::post('unicode', function () {
//     return 'Phương thức Post của path /unicode';
// });

// Route::match(['get', 'post'], '/getpost', function () {
//     return view('form');
// });

// Route::get('/', function () {
//     //Auth::routes();
//     return view('welcome', ['name' => 'Samantha']);
// });

// Route::get('{slug}', 'SlugController@slug')->name('slug');

// --------------------------------USERS-------------------------------------

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Trang chủ
    Route::get('/', 'UserController@index')->name('home');
    Route::get('shop', function () { return 'shop'; })->name('shop');
    Route::get('wishlist', function () { return 'wishlist'; })->name('wishlist');
    Route::get('single-product', function () { return 'single-product'; })->name('single-product');
    Route::get('cart', function () { return 'cart'; })->name('cart');
    Route::get('checkout', function () { return 'checkout'; })->name('checkout');
    Route::get('about', function () { return 'about'; })->name('about');
    Route::get('contact', function () { return 'contact'; })->name('contact');
    // Trang Blog
    Route::group(['prefix' => 'blogs', 'as' => 'blog.'], function () {
        Route::get('/', 'UserController@blogIndex')->name('blogIndex');
        Route::get('/{slug}', 'SlugController@slug')->name('slug');
    });
    // Trang đăng nhập & đăng ký & quên mật khẩu
    Route::group(['prefix' => 'account', 'as' => 'user.'], function () {
        Route::get('/', 'UserController@login')->name('login');
        Route::post('/', 'UserController@handlelogin')->name('handlelogin');

        Route::get('forgotpassword', 'UserController@forgotPass')->name('forgotpass');
        Route::post('forgotpassword', 'UserController@postforgotPass');

        Route::get('resetpassword/{member}/{token}', 'UserController@resetPass')->name('resetpass');
        Route::post('resetpassword/{member}/{token}', 'UserController@postresetPass');

        Route::get('logout', 'UserController@logout')->name('logout');
    });
    Route::group(['prefix' => 'infomation', 'as' => 'userinf.', 'middleware' => 'auth:webuser'], function () {
        Route::get('/{id}', 'UserController@inf')->name('inf');
        Route::post('/{id}', 'UserController@editinf');
    });
});
// http://127.0.0.1:8000/infomation/1
// Dẫn Comment ngoài
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('{slug}/comment/store', 'CommentController@store')->name('comment.store')->middleware('auth:webuser');   
});


// --------------------------------ADMIN-------------------------------------

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('login', 'AdminAuthController@loginAdmin')->name('login');
    Route::post('login', 'AdminAuthController@postloginAdmin');

    Route::get('forgotpassword', 'AdminAuthController@forgotPass')->name('forgotpass');
    Route::post('forgotpassword', 'AdminAuthController@postforgotPass');

    Route::get('resetpassword/{user}/{token}', 'AdminAuthController@resetPass')->name('resetpass');
    Route::post('resetpassword/{user}/{token}', 'AdminAuthController@postresetPass');

    Route::get('logout', 'AdminAuthController@logout')->name('logout');
});

Route::group(['prefix' => 'adminshop', 'middleware' => 'auth'], function () {
    Route::group(['namespace' => 'App\Http\Controllers', 'as' => 'adminshop.'], function () {
        Route::get('/', 'DashboardController@index')->name('index'); 
        Route::get('ChangePassword', 'AdminAuthController@changePass')->name('changepass');
        Route::post('ChangePassword', 'AdminAuthController@postchangePass');
        Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
            Route::get('/', 'ProductController@index')->name('index');
            Route::get('/create', 'ProductController@create')->name('create');
            Route::post('/create', 'ProductController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
            Route::post('/edit/{id}', 'ProductController@updateProduct')->name('postedit');
            Route::get('/delete/{id}', 'ProductController@delete')->name('delete');
        });
        Route::group(['prefix' => 'productcategories', 'as' => 'productcategory.'], function () {
            Route::get('/', 'ProductCategoryController@index')->name('index');
            Route::get('/create', 'ProductCategoryController@create')->name('create');
            Route::post('/create', 'ProductCategoryController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'ProductCategoryController@edit')->name('edit');
            Route::post('/edit/{id}', 'ProductCategoryController@updateCategory')->name('updatecategory');
            Route::get('/delete/{id}', 'ProductCategoryController@delete')->name('delete');
        });
        Route::group(['prefix' => 'suppliers', 'as' => 'supplier.'], function () {
            Route::get('/', 'SupplierController@index')->name('index');
            Route::get('/create', 'SupplierController@create')->name('create');
            Route::post('/create', 'SupplierController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'SupplierController@edit')->name('edit');
            Route::post('/edit/{id}', 'SupplierController@updateSupplier')->name('updateSupplier');
            Route::get('/delete/{id}', 'SupplierController@delete')->name('delete');
        });
        Route::group(['prefix' => 'invoices', 'as' => 'invoice.'], function () {
            Route::get('/', 'InvoiceController@index')->name('index');
            Route::get('/create', 'InvoiceController@create')->name('create');
            Route::post('/create', 'InvoiceController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'InvoiceController@edit')->name('edit');
            Route::post('/edit/{id}', 'InvoiceController@updateInvoice')->name('updateInvoice');
            Route::get('/detail', 'InvoiceController@detail')->name('detail');
            Route::get('/delete/{id}', 'InvoiceController@delete')->name('delete');
        });
        Route::group(['prefix' => 'menus', 'as' => 'menu.'], function () {
            Route::get('/', 'MenuController@index')->name('index');
            Route::get('/create', 'MenuController@create')->name('create');
            Route::post('/create', 'MenuController@postcreate')->name('postcreate');
            Route::group(['prefix' => 'menunotes', 'as' => 'menunote.'], function () {
                Route::get('/create', 'MenuNoteController@create')->name('create');
                Route::post('/create', 'MenuNoteController@postcreate')->name('postcreate');
            });
            Route::get('/edit/{id}', 'MenuController@edit')->name('edit');
            Route::post('/edit/{id}', 'MenuController@updateMenu')->name('updateMenu');
            Route::get('/detail/{id}', 'MenuController@detail')->name('detail');
            Route::get('/delete/{id}', 'MenuController@delete')->name('delete');
            Route::get('/deletenote/{id}', 'MenuController@deleteNote')->name('deletenote');
        });
        Route::group(['prefix' => 'sliders', 'as' => 'slider.'], function () {
            Route::get('/', 'SliderController@index')->name('index');
            Route::get('/create', 'SliderController@create')->name('create');
            Route::post('/create', 'SliderController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'SliderController@edit')->name('edit');
            Route::post('/edit/{id}', 'SliderController@updateSlider')->name('updateSlider');
            Route::get('/delete/{id}', 'SliderController@delete')->name('delete');
        });
        Route::group(['prefix' => 'posts', 'as' => 'post.'], function () {
            Route::get('/', 'PostController@index')->name('index');
            Route::get('/create', 'PostController@create')->name('create');
            Route::post('/create', 'PostController@postcreate')->name('postcreate');
            Route::get('/edit/{id}', 'PostController@edit')->name('edit');
            Route::post('/edit/{id}', 'PostController@updatePost')->name('updatePost');
            Route::get('/delete/{id}', 'PostController@delete')->name('delete');
            Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
                Route::get('/', 'PostController@category')->name('index');
                Route::get('/create', 'PostController@createCategory')->name('createcategory');
                Route::post('/create', 'PostController@postcreateCategory');
                Route::get('/edit/{id}', 'PostController@editCategory')->name('editCategory');
                Route::post('/edit/{id}', 'PostController@updateCategory')->name('updateCategory');
                Route::get('/delete/{id}', 'PostController@deleteCategory')->name('deleteCategory');
            });
        });
        Route::group(['prefix' => 'comments', 'as' => 'comment.'], function () {
            Route::get('/', 'CommentController@index')->name('index');
            Route::get('/delete/{id}', 'CommentController@delete')->name('delete');
        });
        Route::group(['prefix' => 'trademarks', 'as' => 'trademark.'], function () {
            Route::get('/', 'TrademarkController@index')->name('index');
            Route::get('/create', 'TrademarkController@create')->name('create');
            Route::post('/create', 'TrademarkController@postcreate');
            Route::get('/edit/{id}', 'TrademarkController@edit')->name('edit');
            Route::post('/edit/{id}', 'TrademarkController@update');
            Route::get('/delete/{id}', 'TrademarkController@delete')->name('delete');
        });
        Route::group(['prefix' => 'units', 'as' => 'unit.'], function () {
            Route::get('/', 'UnitController@index')->name('index');
            Route::get('/create', 'UnitController@create')->name('create');
            Route::post('/create', 'UnitController@postcreate');
            Route::get('/edit/{id}', 'UnitController@edit')->name('edit');
            Route::post('/edit/{id}', 'UnitController@update');
            Route::get('/delete/{id}', 'UnitController@delete')->name('delete');
        });
    }); 
});