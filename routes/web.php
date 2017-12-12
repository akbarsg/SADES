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
    return view('layout/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');

// Route::get('/login', function () {
//     return view('layout/login');
// });

// Route::get('/register', function () {
//     return view('layout/signUp');
// });

Route::get('/pasangJob', function () {
    return view('layout/pasangJob');
});

Route::get('/profil', function () {
    return view('layout/profil');
});

Route::get('/editProfil', function () {
    return view('layout/editProfil');
});

Route::get('/f/{id}', 'FreelancerController@beFreelancer');
Route::get('/k/{id}', 'ConsumerController@beConsumer');

Route::get('/job/create', 'JobController@create');
Route::post('/job/create', 'JobController@store');
Route::get('/job', 'JobController@index');
Route::get('/job/hasil/{id}', 'JobController@showFinal');
Route::post('/job/ambil', 'NotificationController@takeJob');
Route::get('/job/bayar/{id}', 'JobController@bayar');
Route::get('/job/{user_id}', 'JobController@showMine');
Route::get('/job/{user_id}/{job_id}', 'JobController@show');
Route::get('/prototype/{job_id}', 'JobController@checkProposal');
Route::get('/prototype/acc/{proposal_id}', 'JobController@acceptProposal');
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'JobController@imageUploadPost']);
Route::post('image-upload-final',['as'=>'image.upload.post.final','uses'=>'JobController@imageUploadPostFinal']);
Route::post('payment-upload',['as'=>'payment.upload.post','uses'=>'PaymentController@paymentUploadPost']);
Route::get('/payment/validate/{payment_id}', 'PaymentController@validatePayment');
Route::get('/profil/edit', 'UserController@edit');
Route::get('/profil/{id}', 'UserController@show');
Route::get('/profil/rate/{id}', 'UserController@rate');
Route::get('/hapusAkun', 'UserController@deleteAccount');