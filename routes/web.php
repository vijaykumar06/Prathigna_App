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

Route::get('/', function () {
    return view('landing-page.index');
});
Route::get('/hello', function () {
    return view('afterlogin.jobseeker_fourth');
});
Route::resource('recruiter_register', 'AccountRegister');
Route::get('freelancer_register', 'AccountRegister@viewFreelancerReg');
Route::get('seeker_register', 'AccountRegister@viewSeekerReg');
Route::resource('company_register', 'CompanyRegController');
Route::get('consultancy_register', 'CompanyRegController@viewConsultancyReg');
Route::resource('recruiter_login', 'AccountLoginController');
Route::get('freelancer_login', 'AccountLoginController@viewFreelancerLogin');
Route::get('seeker_login', 'AccountLoginController@viewSeekerLogin');
Route::get('company_login', 'AccountLoginController@viewCompanyLogin');
Route::get('consultancy_login', 'AccountLoginController@viewConsultancyLogin');
Route::post('login', 'AccountLoginController@login');

