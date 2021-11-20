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

Route::name('home')->get('/', function () {
	return view('index');
});

Route::prefix('about')->group(function() {

	Route::name('about')->get('', function() {
		return view('about');
	});

	Route::name('vision')->get('/vision-and-mission', function() {
		return view('vision');
	});

	Route::name('school_policies')->get('/school-policies', function() {
		return view('school_policies');
	});
});

Route::prefix('admissions')->group(function() {
	Route::name('fees')->get('/fees', function() {
		return view('fees');
	});

		Route::name('admission_procedure')->get('/admission-procedure', function() {
			return view('admission_procedure');
		});

			Route::name('admission_policy')->get('/admission-policy', function() {
				return view('admission_policy');
			});
});

Route::prefix('our-setup')->group(function() {
	Route::name('setup.teaching')->get('/teaching', function() {
		return view('teaching');
	});

	Route::name('setup.extra_curricula')->get('/extra_curricula', function() {
		return view('extra_curricula');
	});

	Route::name('setup.curriculum')->get('/curriculum', function() {
		return view('curriculum');
	});

	Route::name('setup.calendar')->get('/calendar', function() {
		return view('calendar');
	});

});

Route::prefix('academics')->group(function() {
	Route::name('academics.creche')->get('/creche', function() {
		return view('creche');
	});

	Route::name('academics.lower_primary')->get('/lower-primary', function() {
		return view('lower-primary');
	});

	Route::name('academics.upper_primary')->get('/upper-primary', function() {
		return view('upper-primary');
	});

	Route::name('academics.jhs')->get('/jhs', function() {
		return view('jhs');
	});
});

Route::name('contact')->get('/contact', function() {
	return view('contact');
});


// just gonna leave this here instead of api.php
// just so it doesn't get too lonely or forgotten
Route::name('contact.send_email')->post('send-mail', 'MailController@sendMail');
