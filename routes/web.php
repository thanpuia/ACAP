<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
});


Route::get('/', function () {
    return view('gachome');
});

//Route::get('student/{id}','StudentController@show');
//Route::get('student/createOrUpdate','StudentController@createOrUpdate')->name('create');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/fun','StudentController@fun')->name('f1');
Route::get('/student/func','StudentController@func')->name('f2');

Route::post('/student/studentinfo','StudentController@studentInfo')->name('studentInfo');
Route::post('/student/searchbyname','StudentController@searchByName')->name('searchByName');
Route::post('/student/searchbysubject','StudentController@searchBySubject')->name('searchBySubject');
Route::post('/student/searchbyreligion','StudentController@searchByReligion')->name('searchByReligion');

Route::post('/student/searchbycommunity','StudentController@searchByCommunity')->name('searchByCommunity');
Route::post('/student/searchbysemester','StudentController@searchBySemester')->name('searchBySemester');
Route::post('/student/searchbyresult','StudentController@searchByResult')->name('searchByResult');
Route::post('/student/listall','StudentController@listAll')->name('listAll');

Route::post('/student/searchbyarea','StudentController@searchByArea')->name('searchByArea');
Route::post('/student/searchbydisabled','StudentController@searchByDisabled')->name('searchByDisabled');

Route::post('/student/searchby','StudentController@searchBy')->name('searchBy');
Route::post('/student/filterby','StudentController@filterBy')->name('filterBy');


Route::resource('student','StudentController');

Auth::routes();