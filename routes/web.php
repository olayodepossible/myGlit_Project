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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/signup1','signUp.signup1');
Route::view('/signup2','signUp.signup2');

Route::get('/sendMail', 'MailController@sendMail');
Route::get('/jobs', 'JobController@showJobs');
Route::get('/recruiter-profile', 'RecruiterBeforeLoginController@showBeforeLogin');
Route::get('/recruiter-profile-after', 'RecruiterAfterLoginController@showAfterLogin');
Route::get('/dashboard/candidate', 'CandidateDashboardController@showDashboard');
Route::get('/company/inbox', 'CompanyInboxController@showCompanyInbox');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
