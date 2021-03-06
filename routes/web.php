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
    return redirect('student/dashboard');
});

//Route::get('student/{id}','StudentController@show');
//Route::get('student/createOrUpdate','StudentController@createOrUpdate')->name('create');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::post('/student/studentinfo','StudentController@studentInfo')->name('student.studentInfo');
    Route::post('/student/searchbyname','StudentController@searchByName')->name('student.searchByName');
    Route::post('/student/searchbysubject','StudentController@searchBySubject')->name('student.searchBySubject');
    Route::post('/student/searchbyreligion','StudentController@searchByReligion')->name('student.searchByReligion');
    
    Route::post('/student/searchbycommunity','StudentController@searchByCommunity')->name('searchByCommunity');
    Route::post('/student/searchbysemester','StudentController@searchBySemester')->name('searchBySemester');
    
    Route::post('/student/searchbyresult','StudentController@searchByResult')->name('searchByResult');
    Route::get('/student/listall','StudentController@listAll')->name('student.listAll');
    Route::get('/student/fastsearch','StudentController@fastSearch')->name('student.fastSearch');

    Route::post('/student/searchbyarea','StudentController@searchByArea')->name('searchByArea');
    Route::post('/student/searchbydisabled','StudentController@searchByDisabled')->name('searchByDisabled');
    
    Route::get('/student/searchby','StudentController@searchBy')->name('searchBy');
    Route::get('/student/filterby','StudentController@filterBy')->name('filterBy');
    Route::get('/student/searchby_archive','StudentController@searchBy_archive')->name('searchBy_archive');
    Route::get('/student/filterby_archive','StudentController@filterBy_archive')->name('filterBy_archive');
    // Route::post('/student/downloadexcel','StudentController@downloadExcel')->name('student.downloadExcel');
    Route::get('/student/export', 'StudentController@export');
    Route::get('/student/dashboard','StudentController@dashboard')->name('student.dashboard');
    Route::get('/student/listtrash','StudentController@listTrash')->name('student.listTrash');
    Route::post('/student/studentstatus','StudentController@studentStatus')->name('student.studentStatus');
    Route::get('/student/restore/{id}','StudentController@restore')->name('student.restore');
    Route::get('/student/restorebulk/{id}','StudentController@restoreBulk')->name('student.restoreBulk');

    Route::get('/student/downloadpdf/{id}','StudentController@downloadPDF')->name('student.downloadPDF');
    Route::get('/student/showtrash/{id}','StudentController@showTrash')->name('student.showTrash');

    Route::get('/student/import','StudentController@showImportPage')->name('student.showImportPage');
    Route::post('/student/importexcel','StudentController@importExcel')->name('student.importExcel');
    Route::post('/student/deletebatch','StudentController@deleteBatch')->name('student.deleteBatch');

    Route::get('/student/listbatch','StudentController@listBatch')->name('student.listBatch');
    Route::delete('/student/deletebatch/{id}','StudentController@deleteBatch')->name('student.deleteBatch');
    Route::get('/student/listsome/{id}','StudentController@listSome')->name('student.listSome');

    Route::get('/student/showpromote','StudentController@showPromote')->name('student.showPromote');
    Route::post('/student/promote','StudentController@promote')->name('student.promote');

    Route::get('/student/archive','StudentController@archive')->name('student.archive');

    Route::resource('student','StudentController');

    Route::get('/course/restore/{id}','CourseController@restore')->name('course.restore');
    Route::resource('course','CourseController');

});
Route::get('/student/fun','StudentController@fun')->name('f1');
Route::get('/student/func','StudentController@func')->name('f2');


Auth::routes();
