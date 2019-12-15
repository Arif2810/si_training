<?php

// Route::get('/', function(){
//   return view('welcome');
// });

Auth::routes();
Route::any('register', function(){
	return abort(404);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
//=========================================================================
Route::group(['middleware'=>'auth'], function(){
	Route::resource('employee', 'EmployeeController');
	Route::get('/employee/{id_karyawan}/show', 'EmployeeController@show');
	//=========================================================================
	Route::resource('schedule', 'ScheduleController');
	Route::get('/schedule/{id_jadwal}/show', 'ScheduleController@show');
	// Route::get('/schedule', 'ScheduleController@index')->name('schedule.index');
	// Route::get('/schedule/create', 'ScheduleController@create')->name('schedule.create');
	// Route::post('/schedule', 'ScheduleController@store');
	// Route::get('/schedule/{id_jadwal}/edit', 'ScheduleController@edit');
	// Route::put('/schedule/{id_jadwal}', 'ScheduleController@update');
	// Route::delete('/schedule/{id_jadwal}', 'ScheduleController@destroy');
	//=========================================================================
	Route::resource('galery', 'GaleryController');
	Route::get('/galery/{id_galeri}/show', 'GaleryController@show');
	//=========================================================================
	Route::get('/setting', 'UserSettingController@form')->name('user.setting');
	Route::post('/setting', 'UserSettingController@update');
	//=========================================================================
	Route::group(['middleware'=>'akses.admin'], function(){
		Route::resource('category', 'CategoryController');
		Route::resource('route', 'RouteController');
		Route::resource('user', 'UserController');
		Route::resource('agama', 'AgamaController');
		Route::resource('venue', 'VenueController');
		Route::resource('gender', 'GenderController');
		Route::resource('position', 'PositionController');
	});
	// Route::get('/user', 'UserController@index')->name('user.index')->middleware('akses.admin');
	//=========================================================================

	Route::get('/about', function(){
		return view('admin.about');
	});
});
