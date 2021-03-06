<?php
Route::auth();
//Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');
// Registration Routes...
    Route::get('/admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('/admin/register', 'AdminAuth\AuthController@register');
    Route::get('/admin', 'AdminPages\AdminController@index');
    //Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
    //Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
   //Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');
 
// ==================level Routes================
    Route::get('/admin/level', 'AdminPages\LevelController@index');
    Route::post('/admin/level', 'AdminPages\LevelController@store');
    Route::get('/admin/level/{id}', 'AdminPages\LevelController@delete');
    Route::put('/admin/level/{id}', 'AdminPages\LevelController@update');
// ==================Language Routes================
    Route::get('/admin/language', 'AdminPages\LanguageController@index');
    Route::post('/admin/language', 'AdminPages\LanguageController@store');
    Route::get('/admin/language/{id}', 'AdminPages\LanguageController@delete');
    Route::put('/admin/language/{id}', 'AdminPages\LanguageController@update');

// ==================Menu Routes================
    Route::get('/admin/menu', 'AdminPages\MenuController@index');
    Route::post('/admin/menu', 'AdminPages\MenuController@store');
    Route::put('/admin/menu/{id}', 'AdminPages\MenuController@update');
    Route::get('/admin/menu/{id}', 'AdminPages\MenuController@delete');

    Route::post('/admin/menu/{id}/submenu', 'AdminPages\SubmenuController@store');
    Route::put('/admin/submenu/{id}', 'AdminPages\SubmenuController@update');
    Route::get('/admin/submenu/{id}', 'AdminPages\SubmenuController@delete');
// ==================Course Routes================
    Route::get('/admin/course/add', 'AdminPages\CourseController@index');
    Route::post('/admin/course/add', 'AdminPages\CourseController@store');

    Route::get('/admin/section/add', 'AdminPages\SectionController@index');
    Route::post('/admin/section/add', 'AdminPages\SectionController@store');

    Route::get('/admin/lecture/add', 'AdminPages\LectureController@index');
    Route::post('/admin/lecture/add', 'AdminPages\LectureController@store');
    // Route::get('/admin/language/{id}', 'AdminPages\LanguageController@delete');
    // Route::put('/admin/language/{id}', 'AdminPages\LanguageController@update');

// ==================User Register================
    Route::post('/register','Auth\AuthController@register');
    // Route::post('/login','Auth\AuthController@login');
    // Route::get('/logout','Auth\AuthController@logout');

    Route::get('/ajax/category/{id}','AjaxController@category'); 
    Route::get('/ajax/course/{id}','AjaxController@course'); 


    Route::get('/', 'RouteController@home');
    Route::get('/courses', 'RouteController@courses');
    Route::get('/course/videos/{slug}/watch={id}', 'RouteController@viewVideo');
    Route::get('/course/videos/{slug}', 'RouteController@viewVideo');
    Route::get('/course/{slug}', 'RouteController@viewCourse');
    Route::get('/courses/{cat_id}/{sub_id}', 'RouteController@featured');
    Route::get('/courses/{cat_id}/{sub_id}/all-courses', 'RouteController@allCourses');
    Route::get('/shopping-card', 'RouteController@shopping');
    Route::get('/my-courses', 'RouteController@my_courses');
    Route::get('/edit-profile', 'RouteController@edit_profile');
    Route::get('/account-settings', 'RouteController@account_settings');