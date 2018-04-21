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

/*Route::get('/', function () {
    return view('user/app');
});*/
/*Route::get('/', function () {
    return view('user/home');
});*/

//Route::get('apply', function () {
//    return view('applicant/applyForm');
//});


//User routes
Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index');
    //slug == column name
    Route::get('courses', 'CourseController@index')->name('applicant.viewCourses'); //route = viewCourses
    Route::get('courses/{course}', 'CourseController@course')->name('applicant.courses');

    Route::get('courses/category/{category}', 'HomeController@category')->name('category');

    Route::get('search', 'CourseController@search');
    Route::resource('apply', 'applicationcontroller');
    Route::post('send','mailcontroller@send');
    Route::get('email','mailcontroller@email');

});



Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    Route::resource('admin/course', 'CourseController');
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/user', 'UserController');
    Route::resource('admin/role', 'RoleController');
    Route::resource('admin/permission', 'PermissionController');
    // Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    //if it is post req it goes to loginController @ login function under same name as admin-login
    Route::post('admin-login', 'Auth\LoginController@login');
    Route::get('admin-applicants','ApplicantsController@viewApplicants');
Route::get('admin/pdf/getpdf','PdfController@getPDF');

});


/*Route::get('admin/home', function () {
    return view('admin/home');
});

Route::get('admin/course', function () {
    return view('admin.courses.course');
});
Route::get('admin/category', function () {
    return view('admin.category.category');
});*/

//every routes related to the auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
