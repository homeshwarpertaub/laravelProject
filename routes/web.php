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
    Route::get('/', 'HomeController@index')->name('applicant.home');
    //slug == column name
    Route::get('courses', 'CourseController@index')->name('applicant.allCourses'); //route = viewCourses
    Route::get('viewcourses', 'CourseController@search')->name('applicant.viewCourses'); //route = viewCourses
    Route::get('courses/details/{id}', 'CourseController@courseDetails')->name('applicant.courseDetails'); //route = v
    Route::get('courses/{course}', 'CourseController@course')->name('applicant.courses');
    Route::get('calendar', 'calendarController@index')->name('applicant.calendar');
    Route::get('courses/category/{category}', 'HomeController@category')->name('category');

    Route::get('search', 'CourseController@search');
    Route::resource('apply', 'applicationcontroller');
    Route::get('send', 'mailcontroller@send')->name('mailsent');

    Route::resource('update', 'UserEditController');
    Route::get('contact', 'ContactController@index')->name('applicant.contact');
    Route::post('contact', 'ContactController@sendContact')->name('contactEmail');
    Route::get('aboutus','AboutusController@index')->name('applicant.about');
    Route::get('help','HelpController@index')->name('applicant.help');
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
    Route::get('admin/pdf/getpdf/{id}', 'PdfController@downloadPdf')->name('admin.pdfs');
    Route::resource('admin/admin-applicants', 'ApplicantsController');
    Route::get('admin/sms', 'smsController@index')->name('sms');
    Route::post('admin/sms/send', 'smsController@getUserNumber')->name('message');
    Route::resource('admin/calendar', 'CalendarEventsController');
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


