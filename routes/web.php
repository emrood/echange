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


//Route::get('/', function () {
//    return redirect('/login');
//})->middleware('auth');

Route::post('login', 'Auth\LoginController@login');
Route::get('login' , 'Auth\LoginController@login');
Route::get('/'     , 'Auth\LoginController@login');
Route::get('chartdata'     , 'HomeController@getChartData');

Route::resource('home', 'HomeController');

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['admin', 'user']], function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    });
    Route::get('account-settings', 'UsersController@getSettings');
    Route::post('account-settings', 'UsersController@saveSettings');
});

Route::group(['middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {

//===================== Dashboard Routes =======================//

    Route::get('index', function () {
        return view('backend.index');
    });

    Route::get('index2', function () {
        return view('backend.index2');
    });

    Route::get('index3', function () {
        return view('backend.index3');
    });

    Route::get('index4', function () {
        return view('backend.index4');
    });

    Route::get('index5', function () {
        return view('backend.index5');
    });
    Route::get('index6', function () {
        return view('backend.index6');
    });


//===================== Apps Routes =======================//

    Route::get('calender', function () {
        return view('backend.apps.calendar');
    });

    Route::get('email-index', function () {
        return view('backend.apps.email.index');
    });

    Route::get('email-compose', function () {
        return view('backend.apps.email.compose');
    });

    Route::get('email-detail', function () {
        return view('backend.apps.email.detail');
    });


//===================== UI Routes =======================//

    Route::get('ui-buttons', function () {
        return view('backend.ui-elements.ui-buttons');
    });

    Route::get('ui-modals', function () {
        return view('backend.ui-elements.ui-modals');
    });

    Route::get('ui-tabs', function () {
        return view('backend.ui-elements.ui-tabs');
    });

    Route::get('ui-cards', function () {
        return view('backend.ui-elements.ui-cards');
    });

    Route::get('ui-tooltip-popover', function () {
        return view('backend.ui-elements.ui-tooltip-popover');
    });

    Route::get('ui-notification', function () {
        return view('backend.ui-elements.ui-notification');
    });

    Route::get('ui-progressbar', function () {
        return view('backend.ui-elements.ui-progressbar');
    });

    Route::get('ui-typography', function () {
        return view('backend.ui-elements.ui-typography');
    });

    Route::get('ui-bootstrap', function () {
        return view('backend.ui-elements.ui-bootstrap');
    });

    Route::get('ui-breadcrumb', function () {
        return view('backend.ui-elements.ui-breadcrumb');
    });

    Route::get('ui-list-media', function () {
        return view('backend.ui-elements.ui-list-media');
    });

    Route::get('ui-grid', function () {
        return view('backend.ui-elements.ui-grid');
    });

    Route::get('ui-carousel', function () {
        return view('backend.ui-elements.ui-carousel');
    });

    Route::get('ui-scrollspy', function () {
        return view('backend.ui-elements.ui-scrollspy');
    });

    Route::get('ui-spinner', function () {
        return view('backend.ui-elements.ui-spinner');
    });

    Route::get('ui-toasts', function () {
        return view('backend.ui-elements.ui-toasts');
    });


//===================== Form Routes =======================//

    Route::get('form-basic', function () {
        return view('backend.forms.form-basic');
    });

    Route::get('form-bootstrap-touchspin', function () {
        return view('backend.forms.form-bootstrap-touchspin');
    });

    Route::get('form-dropzone', function () {
        return view('backend.forms.form-dropzone');
    });

    Route::get('form-horizontal', function () {
        return view('backend.forms.form-horizontal');
    });

    Route::get('form-img-cropper', function () {
        return view('backend.forms.form-img-cropper');
    });

    Route::get('form-bootstrap-datepicker', function () {
        return view('backend.forms.form-picker-bootstrap-datepicker');
    });

    Route::get('form-bootstrap-rangepicker', function () {
        return view('backend.forms.form-picker-bootstrap-rangepicker');
    });

    Route::get('form-colorpicker', function () {
        return view('backend.forms.form-picker-colorpicker');
    });

    Route::get('form-select2', function () {
        return view('backend.forms.form-select2');
    });

    Route::get('form-radio-checkbox', function () {
        return view('backend.forms.form-radio-checkbox');
    });


//===================== Table Routes =======================//

    Route::get('table-bootstrap', function () {
        return view('backend.tables.table-bootstrap');
    });

    Route::get('table-basic', function () {
        return view('backend.tables.table-basic');
    });

    Route::get('table-layout-coloured', function () {
        return view('backend.tables.table-layout-coloured');
    });

    Route::get('table-datatable-basic', function () {
        return view('backend.tables.table-datatable-basic');
    });

    Route::get('table-responsive', function () {
        return view('backend.tables.table-responsive');
    });

    Route::get('table-responsive', function () {
        return view('backend.tables.table-responsive');
    });


//===================== Chart Routes =======================//

    Route::get('chart-c3', function () {
        return view('backend.charts.chart-c3');
    });

    Route::get('chart-js', function () {
        return view('backend.charts.chart-chart-js');
    });

    Route::get('chart-chartist', function () {
        return view('backend.charts.chart-chartist');
    });

    Route::get('chart-sparkline', function () {
        return view('backend.charts.chart-sparkline');
    });


//===================== ECommerce Routes =======================//

    Route::get('cart', function () {
        return view('backend.ecommerce.cart');
    });

    Route::get('checkout', function () {
        return view('backend.ecommerce.checkout');
    });

    Route::get('orders', function () {
        return view('backend.ecommerce.orders');
    });

    Route::get('products', function () {
        return view('backend.ecommerce.products');
    });

    Route::get('products-detail', function () {
        return view('backend.ecommerce.products-detail');
    });

    Route::get('products-edit', function () {
        return view('backend.ecommerce.products-edit');
    });

    Route::get('products-edit', function () {
        return view('backend.ecommerce.products-edit');
    });


//===================== Sample Pages Routes =======================//

    Route::get('starter-kit', function () {
        return view('backend.sample-pages.starter-kit');
    });

    Route::get('animation', function () {
        return view('backend.sample-pages.animation');
    });

    Route::get('block-ui', function () {
        return view('backend.sample-pages.block-ui');
    });

    Route::get('gallery', function () {
        return view('backend.sample-pages.gallery');
    });

    Route::get('maintenance', function () {
        return view('backend.sample-pages.maintenance');
    });

    Route::get('profile', function () {
        return view('backend.sample-pages.profile');
    });

    Route::get('search-result', function () {
        return view('backend.sample-pages.search-result');
    });

    Route::get('session-idle-timeout', function () {
        return view('backend.sample-pages.session-idle-timeout');
    });

    Route::get('session-timeout', function () {
        return view('backend.sample-pages.session-timeout');
    });

    Route::get('treeview', function () {
        return view('backend.sample-pages.treeview');
    });

    Route::get('utility-classes', function () {
        return view('backend.sample-pages.utility-classes');
    });


//===================== Authentication Pages Routes =======================//

    Route::get('lockscreen', function () {
        return view('backend.authentication.lockscreen');
    });

    Route::get('auth-login', function () {
        return view('backend.authentication.login');
    });

    Route::get('auth-register', function () {
        return view('backend.authentication.register');
    });

    Route::get('auth-recover-password', function () {
        return view('backend.authentication.recover-password');
    });


//===================== Maps Routes =======================//

    Route::get('google-map', function () {
        return view('backend.maps.map-google');
    });

    Route::get('vector-map', function () {
        return view('backend.maps.map-vector');
    });


//===================== Icons Routes =======================//

    Route::get('fontawesome-icons', function () {
        return view('backend.icons.fontawesome');
    });

    Route::get('weather-icons', function () {
        return view('backend.icons.weather');
    });

    Route::get('feather-icons', function () {
        return view('backend.icons.feather');
    });


//===================== Error Pages Routes =======================//

    Route::get('error-400', function () {
        return view('backend.errors.error-400');
    });

    Route::get('error-403', function () {
        return view('backend.errors.error-403');
    });
    Route::get('error-404', function () {
        return view('backend.errors.error-404');
    });

    Route::get('error-500', function () {
        return view('backend.errors.error-500');
    });

    Route::get('error-503', function () {
        return view('backend.errors.error-503');
    });


//=================  Permission management =======================//

    Route::get('permission-management', 'PermissionController@getIndex');
    Route::get('permission/create', 'PermissionController@create');
    Route::post('permission/create', 'PermissionController@save');
    Route::get('permission/delete/{id}', 'PermissionController@delete');
    Route::get('permission/edit/{id}', 'PermissionController@edit');
    Route::post('permission/edit/{id}', 'PermissionController@update');


//=================  Role management =======================//


    Route::get('role-management', 'RoleController@getIndex');
    Route::get('role/get-data', 'RoleController@getData');
    Route::get('role/create', 'RoleController@create');
    Route::post('role/create', 'RoleController@save');
    Route::delete('role/{id}', 'RoleController@delete');
    Route::get('role/{id}/edit', 'RoleController@edit');
    Route::post('role/{id}/edit', 'RoleController@update');


//=================  CRUD Generator =======================//

    Route::get('/crud-generator', ['uses' => 'ProcessController@getGenerator']);
    Route::post('/crud-generator', ['uses' => 'ProcessController@postGenerator']);


//=================  Activity Log =======================//

    Route::get('activity-log', 'LogViewerController@getActivityLog');
    Route::get('activity-log/data', 'LogViewerController@activityLogData')->name('activity-log.data');


//================== Blog Routes ==========================//
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/create', 'BlogController@create');
        Route::post('/create', 'BlogController@store');
        Route::get('delete/{id}', 'BlogController@destroy')->name('blog.delete');
        Route::get('edit/{id}', 'BlogController@edit')->name('blog.edit');
        Route::post('edit/{id}', 'BlogController@update');
        Route::get('view/{id}', 'BlogController@show');
//        Route::get('{blog}/restore', 'BlogController@restore')->name('blog.restore');
        Route::post('{id}/storecomment', 'BlogController@storeComment')->name('storeComment');
    });
    Route::resource('blog', 'BlogController');

    Route::group(['prefix' => 'blog-category'], function () {
        Route::get('/', 'BlogCategoryController@getIndex');
        Route::get('/create', 'BlogCategoryController@create');
        Route::post('/create', 'BlogCategoryController@save');
        Route::get('/delete/{id}', 'BlogCategoryController@delete');
        Route::get('/edit/{id}', 'BlogCategoryController@edit');
        Route::post('/edit/{id}', 'BlogCategoryController@update');
    });
    Route::resource('blogcategory', 'BlogCategoryController');

    Route::get('users', 'UsersController@getIndex');
    Route::get('user/create', 'UsersController@create');
    Route::get('user/get-data', 'UsersController@getData');
    Route::post('user/create', 'UsersController@save');
    Route::get('user/{id}/edit', 'UsersController@edit');
    Route::post('user/{id}/edit', 'UsersController@update');
    Route::delete('user/{id}', 'UsersController@delete');
    Route::get('user/deleted/', 'UsersController@getDeletedUsers');
    Route::post('user/destroy/{id}', 'UsersController@destroy');
    Route::post('user/restore/{id}', 'UsersController@restoreUser');

});


//======================== Log Viewer ==============================//

Route::get('log-viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
Route::get('log-viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log-viewers.logs');
Route::delete('log-viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log-viewers.logs.delete');
Route::get('log-viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log-viewers.logs.show');
Route::get('log-viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log-viewers.logs.download');
Route::get('log-viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log-viewers.logs.filter');
Route::get('log-viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log-viewers.logs.search');
Route::get('log-viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');

//===================== Default Auth Routes =======================//
Route::get('auth/{provider}/', 'Auth\SocialLoginController@redirectToProvider');
Route::get('{provider}/callback', 'Auth\SocialLoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
//=================== Blog Frontend Routes ======================//

Route::get('blogs', 'BlogController@getBlogList');
Route::get('blogs/{slug}', 'BlogController@getBlog');
Route::get('blogs/category/{slug}', 'BlogController@getCategoryBlog');
Route::get('blogs/tag/{slug}', 'BlogController@getTagBlog');
Route::get('blogs/author/{slug}', 'BlogController@getAuthorBlog');
Route::post('blogs/{id}/storecomment', 'BlogController@storeComment');


Route::get('/','FrontEndController@index');
Route::get('/sample','FrontEndController@getSample');
//=================== New CRUD Routes =========================//

Route::get('currency/get-data','Currency\\CurrencyController@getData');
Route::resource('currency', 'Currency\\CurrencyController');
Route::get('history/get-data','RateHistory\\RateHistoryController@getData');
Route::resource('history', 'RateHistory\\RateHistoryController');

Route::get('/cash-fund/{id}/print',[
    'uses' => 'CashFundController@print',
    'as' => 'cash-fund.print'
]);

//Depot
Route::get('/cash-fund/{id}/deposit/print',[
    'uses' => 'CashFundController@printdeposit',
    'as' => 'cash-fund.printdeposit'
]);

Route::post('cash-fund/deposit/save', 'CashFundController@savedeposit');
Route::get('cash-fund/deposit', 'CashFundController@deposit');
Route::get('cash-fund/{uid}/cancel/deposit', 'CashFundController@cancelDeposit');


// Retrait
Route::get('/cash-fund/{id}/withdrawal/print',[
    'uses' => 'CashFundController@printwithdrawal',
    'as' => 'cash-fund.printdeposit'
]);
Route::post('cash-fund/withdrawal/save', 'CashFundController@savewithdrawal');
Route::get('cash-fund/withdrawal', 'CashFundController@withdrawal');
Route::get('cash-fund/{uid}/cancel/withdrawal', 'CashFundController@cancelWithdrawal');


//Fond de caisse
Route::get('cash-fund/{uid}/cancel', 'CashFundController@cancel');
Route::get('cash-fund/{user_id}/balance', 'CashFundController@balance');
Route::resource('cash-fund', 'CashFundController');
Route::get('change/getrate', 'ChangeController@getratesale');
Route::get('/change/{id}/print',[
    'uses' => 'ChangeController@print',
    'as' => 'change.print'
]);
Route::get('change/list', 'ChangeController@list');
Route::get('change/{id}/cancel', 'ChangeController@cancel');
Route::resource('change', 'ChangeController');