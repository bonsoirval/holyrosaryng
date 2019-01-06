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

//Route::get('notfound', 'HomeController@notfound')->name('notfound');
Route::get('/', function(){
	return view('frontend.index');
});

/*
Route::prefix('nursing_student')->group(function(){
	Route::get('/login', 'Auth\Nursing_student_login_controller@show_login_form')->name('nursing_student');
});
*/
Route::prefix('/')->group(function (){
	//general frontend
	Route::get('', 'Holyrosaryng_controller@index')->name('holyrosary_index');
	Route::get('/holyrosary_about', 'Holyrosaryng_controller@holyrosary_about')->name('holyrosary_about');
	Route::get('/holyrosary_admission', 'Holyrosaryng_controller@holyrosary_admission')->name('holyrosary_admission');
	Route::get('/holyrosary_contact', 'Holyrosaryng_controller@holyrosary_contact')->name('holyrosary_contact');

	//nursing frontend
	Route::get('/nursing_school_index', 'Holyrosaryng_controller@nursing_school_index')->name('nursing_school_index');

	//medlab frontend
	Route::get('/medlab_school_index', 'Holyrosaryng_controller@medlab_school_index')->name('medlab_school_index');

	//midwifery frontend
	Route::get('/midwifery_school_index', 'Holyrosaryng_controller@midwifery_school_index')->name('midwifery_school_index');

});


//frontend pages
Route::get('/school/', 'FrontendController@school')->name('school');
Route::get('/index/', 'FrontendController@index')->name('index');
Route::get('/about/', 'FrontendController@about')->name('about');
Route::get('/admission/', 'FrontendController@admission')->name('admission');
Route::get('/schools/', 'FrontendController@schools')->name('schools');
Route::get('/contact/', 'FrontendController@contact')->name('contact');

Route::get('/result/', 'FrontendController@showResultForm')->name('entrance_result');
Route::post('/result/', 'FrontendController@result')->name('entrance_result_submit');

/*
Route::get('/', function() {
	return view('welcome');
});
*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Nursing admin routes
Route::prefix('admin/nursing')->group(function (){
	Route::get('/login', 'Auth\Nursing_admin_login_controller@show_login_form')->name('nursing_admin_login');
	Route::post('/login', 'Auth\Nursing_admin_login_controller@login')->name('nursing_admin_login_submit');
	Route::get('/logout', 'Auth\Nursing_admin_login_controller@logout')->name('nursing_admin_logout');
	Route::get('/', 'NursingAdminController@index')->name('nursing_admin_dashboard');

/*
	//Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
*/
});

//Medlab admin Route
Route::prefix('admin/medlab')->group(function (){
	Route::get('/login', 'Auth\MedlabAdminLoginController@show_login_form')->name('medlab_admin');
	Route::post('/login', 'Auth\MedlabAdminLoginController@login')->name('medlab_admin_login_submit');
	Route::get('/logout', 'Auth\MedlabAdminLoginController@logout')->name('medlab_admin_logout');
	Route::get('/', 'MedlabAdminController@index')->name('medlab_admin_dashboard');

/*
	//Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
*/
});


//Midwife admin Route
Route::prefix('admin/midwife')->group(function (){
	Route::get('/login', 'Auth\MidwifeAdminLoginController@show_login_form')->name('midwife_admin');
	Route::post('/login', 'Auth\MidwifeAdminLoginController@login')->name('midwife_admin_login_submit');
	Route::get('/logout', 'Auth\MidwifeAdminLoginController@logout')->name('midwife_admin_logout');
	Route::get('/', 'MidwifeAdminController@index')->name('midwife_admin_dashboard');

/*
	//Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
*/
});

//Super admin routes
Route::prefix('admin')->group(function ($id){
	Route::get('/login', 'Auth\AdminLoginController@show_login_form')->name('admin_login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin_login_submit');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('super_admin_logout');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

  //Route::match(['get', 'put'], 'update/{id}', 'Crud2Controller@update');
  Route::get('/student_view/', 'AdminController@view_students')->name('admin_student_view');
  Route::match(['get', 'put'], '/student_update/{id}', 'AdminController@student_update')->name('student_update');
  Route::get('/student_update', 'AdminController@student_update')->name('student_update');
	Route::get('/student_login_update', 'AdminController@student_login_update')->name('student_login_update');

  //Candidates
  Route::match(['get', 'put'], '/candidate_view', 'AdminCandidateController@candidate_view')->name('admin_candidate_view');
  Route::match(['get', 'put'], '/candidate_profile', 'AdminCandidateController@candidate_profile_update')->name('admin_candidate_profile_update');

/*
  Route::get('student_update/{id}', function ($id) {
    Route::match(['get', 'put'], 'update/{id}', 'Crud2Controller@update');
      return 'Student id : '.$id;
  });
*/

	//Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});



//students
Route::prefix('nursing/student')->group(function (){
  Route::get('/register_course', 'Nursing_studentController@register_courses')->name('register_course');
  Route::get('/register_course/{id}', 'Nursing_studentController@register_course')->name('register_courses');
  Route::get('/view_courses', 'Nursing_studentController@view_courses')->name('view_courses');
	Route::get('/login', 'Auth\Nursing_student_login_controller@show_login_form')->name('nursing_student');
	Route::post('/login', 'Auth\Nursing_student_login_controller@login')->name('nursing_student_login_submit');
	Route::get('/logout', 'Auth\Nursing_student_login_controller@logout')->name('Nursing_student_logout');
	Route::get('/register', 'Auth\Nursing_studentRegisterController@showRegistrationForm')->name('register_student_candidate');
	Route::post('/register', 'Auth\Nursing_studentRegisterController@register')->name('register_nursing_student_submit');
	Route::get('/', 'Nursing_studentController@index')->name('nursing_student_dashboard');
});


//nursing Routes
//candidates
Route::prefix('nursing/candidate')->group(function (){
	Route::get('/login', 'Auth\Nursing_candidate_login_controller@show_login_form')->name('nursing_candidate_login');
	Route::post('/login', 'Auth\Nursing_candidate_login_controller@login')->name('nursing_candidate_login_submit');
	Route::get('/logout', 'Auth\Nursing_candidate_login_controller@logout')->name('nursing_candidate_logout');
	Route::get('/register', 'Auth\Nursing_candidate_register_controller@showRegistrationForm')->name('register_nursing_candidate');
	Route::post('/register', 'Auth\Nursing_candidate_register_controller@register')->name('register_nursing_candidate_submit');
	Route::get('/', 'Nursing_candidate_controller@index')->name('nursing_candidate_dashboard');

	Route::get('/profile_update', 'Nursing_candidate_controller@showProfile_updateForm')->name('nursing_candidate_profile_update');
	Route::post('/profile_update', 'Nursing_candidate_controller@profile_update')->name('nursing_candidate_profile_updates_submit');

	Route::get('/passport_upload', 'Nursing_candidate_controller@showPassport_uploadForm')->name('nursing_candidate_passport_upload');
	Route::post('/passport_upload',  'Nursing_candidate_controller@passport_upload')->name('nursing_candidate_passport_upload_submit');

	Route::get('/contact', 'Nursing_candidate_controller@showContactForm')->name('nursing_candidate_contact');
	Route::post('/contact', 'Nursing_candidate_controller@contact')->name('nursing_candidate_contact_submit');

	Route::get('/nextkin', 'Nursing_candidate_controller@showNextkinForm')->name('nursing_candidate_nextkin');
	Route::post('/nextkin', 'Nursing_candidate_controller@nextkin')->name('nursing_candidate_nextkin_submit');

	Route::get('/password_change', 'Nursing_candidate_controller@showPassword_changeForm')->name('nursing_candidate_password_change');
	Route::post('/password_change', 'Nursing_candidate_controller@password_change')->name('nursing_candidate_password_change_submit');


	Route::get('/olevel1', 'Nursing_candidate_controller@showOlevel1Form')->name('nursing_candidate_olevel1');
	Route::post('/olevel1', 'Nursing_candidate_controller@olevel1')->name('nursing_candidate_olevel1_submit');

	Route::get('/olevel2', 'Nursing_candidate_controller@showOlevel2Form')->name('nursing_candidate_olevel2');
	Route::post('/olevel2', 'Nursing_candidate_controller@olevel2')->name('nursing_candidate_olevel2_submit');

	Route::get('/preview', 'Nursing_candidate_controller@showPreviewForm')->name('nursing_candidate_preview');
	Route::post('/preview', 'Nursing_candidate_controller@preview_submit')->name('nursing_candidate_preview_submit');

	Route::get('/complete_application', 'Nursing_candidate_controller@showComplete_applicationForm')->name('nursing_candidate_complete_application');
	Route::post('/complete_application', 'Nursing_candidate_controller@complete_application')->name('candidate_complete_application_submit');
	Route::get('/','Nursing_candidate_controller@index')->name('nursing_candidate_dashboard');
});

//medlab Routes
//candidates
Route::prefix('medlab/candidate')->group(function (){
	Route::get('/login', 'Auth\Medlab_candidate_login_controller@show_login_form')->name('medlab_candidate_login');
	Route::post('/login', 'Auth\Medlab_candidate_login_controller@login')->name('medlab_candidate_login_submit');
	Route::get('/logout', 'Auth\Medlab_candidate_login_controller@logout')->name('medlab_candidate_logout');
	Route::get('/register', 'Auth\Medlab_candidate_login_controller@showRegistrationForm')->name('register_medlab_candidate');
	Route::post('/register', 'Auth\Medlab_candidate_login_controller@register')->name('register_medlab_candidate_submit');
	Route::get('/', 'Medlab_candidate_login_controller@index')->name('medlab_candidate_dashboard');

	Route::get('/profile_update', 'Medlab_candidateController@showProfile_updateForm')->name('medlab_candidate_profile_update');
	Route::post('/profile_update', 'Medlab_candidateController@profile_update')->name('medlab_candidate_profile_update_submit');

	Route::get('/passport_upload', 'Medlab_candidateController@showPassport_uploadForm')->name('medlab_candidate_passport_upload');
	Route::post('/passport_upload',  'Medlab_candidateController@passport_upload')->name('medlab_candidate_passport_upload_submit');

	Route::get('/contact', 'Medlab_candidateController@showContactForm')->name('medlab_candidate_contact');
	Route::post('/contact', 'Medlab_candidateController@contact')->name('medlab_candidate_contact_submit');

	Route::get('/nextkin', 'Medlab_candidateController@showNextkinForm')->name('medlab_candidate_nextkin');
	Route::post('/nextkin', 'Medlab_candidateController@nextkin')->name('medlab_candidate_nextkin_submit');

	Route::get('/password_change', 'Medlab_candidateController@showPassword_changeForm')->name('medlab_candidate_password_change');
	Route::post('/password_change', 'Medlab_candidateController@password_change')->name('medlab_candidate_password_change_submit');


	Route::get('/olevel1', 'Medlab_candidateController@showOlevel1Form')->name('medlab_candidate_olevel1');
	Route::post('/olevel1', 'Medlab_candidateController@olevel1')->name('medlab_candidates_olevel1_submit');

	Route::get('/olevel2', 'Medlab_candidateController@showOlevel2Form')->name('medlab_candidate_olevel2');
	Route::post('/olevel2', 'Medlab_candidateController@olevel2')->name('medlab_candidates_olevel2_submit');

	Route::get('/preview', 'Medlab_candidateController@showPreviewForm')->name('medlab_candidate_preview');
	Route::post('/preview', 'Medlab_candidateController@preview_submit')->name('medlab_candidate_preview_submit');

	Route::get('/complete_application', 'Medlab_candidateController@showComplete_applicationForm')->name('medlab_candidate_complete_application');
	Route::post('/complete_application', 'Medlab_candidateController@complete_application')->name('medlab_candidate_complete_application_submit');
});

//students
Route::prefix('medlab/student')->group(function (){
  Route::get('/register_course', 'Medlab_student_controller@register_courses')->name('register_course');
  Route::get('/register_course/{id}', 'Medlab_student_controller@register_course')->name('register_courses');
  Route::get('/view_courses', 'Medlab_student_controller@view_courses')->name('view_courses');

	Route::get('/login', 'Auth\Medlab_student_login_controller@show_login_form')->name('medlab_student_login');
	Route::post('/login', 'Auth\Medlab_student_login_controller@login')->name('medlab_student_login_submit');
	Route::get('/logout', 'Auth\Medlab_student_login_controller@logout')->name('medlab_student_logout');
	Route::get('/register', 'Auth\Medlab_student_login_controller@showRegistrationForm')->name('register_student_candidate');
	Route::post('/register', 'Auth\Medlab_student_login_controller@register')->name('register_medlab_student_submit');
	Route::get('/', 'Medlab_student_controller@index')->name('medlab_student_dashboard');
});

//midwife Routes
//students
Route::prefix('midwife/student')->group(function (){
  Route::get('/register_course', 'Midwife_student_controller@register_courses')->name('register_course');
  Route::get('/register_course/{id}', 'Midwife_student_controller@register_course')->name('register_courses');
  Route::get('/view_courses', 'Midwife_student_controller@view_courses')->name('view_courses');
	Route::get('/login', 'Auth\Midwife_student_login_controller@show_login_form')->name('midwife_student_login');
	Route::post('/login', 'Auth\Midwife_student_login_controller@login')->name('midwife_student_login_submit');
	Route::get('/logout', 'Auth\Midwife_student_login_controller@logout')->name('midwife_student_logout');
	Route::get('/register', 'Auth\Midwife_student_login_controller@showRegistrationForm')->name('register_student_candidate');
	Route::post('/register', 'Auth\Midwife_student_login_controller@register')->name('register_midwife_student_submit');
	Route::get('/', 'Midwife_student_controller@index')->name('midwife_student_dashboard');
});
//candidates
Route::prefix('midwife/candidate')->group(function (){
	Route::get('/login', 'Auth\Midwife_candidate_login_controller@show_login_form')->name('midwife_candidate_login');
	Route::post('/login', 'Auth\Midwife_candidate_login_controller@login')->name('midwife_candidate_login_submit');
	Route::get('/logout', 'Auth\Midwife_candidate_login_controller@logout')->name('midwife_candidate_logout');
	Route::get('/register', 'Auth\Midwife_candidateRegisterController@showRegistrationForm')->name('register_midwife_candidate');
	Route::post('/register', 'Auth\Midwife_candidateRegisterController@register')->name('register_midwife_candidate_submit');
	Route::get('/', 'Midwife_candidateController@index')->name('midwife_candidate_dashboard');

	Route::get('/profile_update', 'Midwife_candidateController@showProfile_updateForm')->name('midwife_candidate_profile_update');
	Route::post('/profile_update', 'Midwife_candidateController@profile_update')->name('midwife_candidate_profile_update_submit');

	Route::get('/passport_upload', 'Midwife_candidateController@showPassport_uploadForm')->name('midwife_candidate_passport_upload');
	Route::post('/passport_upload',  'Midwife_candidateController@passport_upload')->name('midwife_candidate_passport_upload_submit');

	Route::get('/contact', 'Midwife_candidateController@showContactForm')->name('midwife_candidate_contact');
	Route::post('/contact', 'Midwife_candidateController@contact')->name('midwife_candidate_contact_submit');

	Route::get('/nextkin', 'Midwife_candidateController@showNextkinForm')->name('midwife_candidate_nextkin');
	Route::post('/nextkin', 'Midwife_candidateController@nextkin')->name('midwife_candidate_nextkin_submit');

	Route::get('/password_change', 'Midwife_candidateController@showPassword_changeForm')->name('midwife_candidate_password_change');
	Route::post('/password_change', 'Midwife_candidateController@password_change')->name('midwife_candidate_password_change_submit');


	Route::get('/olevel1', 'Midwife_candidateController@showOlevel1Form')->name('midwife_candidate_olevel1');
	Route::post('/olevel1', 'Midwife_candidateController@olevel1')->name('midwife_candidate_olevel1_submit');

	Route::get('/olevel2', 'Midwife_candidateController@showOlevel2Form')->name('midwife_candidate_olevel2');
	Route::post('/olevel2', 'Midwife_candidateController@olevel2')->name('midwife_candidate_olevels_submit');

	Route::get('/preview', 'Midwife_candidateController@showPreviewForm')->name('midwife_candidate_preview');
	Route::post('/preview', 'Midwife_candidateController@preview_submit')->name('midwife_candidate_preview_submit');

	Route::get('/complete_application', 'Midwife_candidateController@showComplete_applicationForm')->name('midwife_candidate_complete_application');
	Route::post('/complete_application', 'Midwife_candidateController@complete_application')->name('midwife_candidate_complete_application_submit');
});
