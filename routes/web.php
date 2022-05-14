<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\AdminSavingController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminLoanController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSmsController;

Route::get('/', function () { return view('welcome'); });

Route::get('/sms', function () {
     $client = new \GuzzleHttp\Client();
     $response = $client->post(
         'https://www.bulksmsnigeria.com/api/v1/sms/create',
         [
             'headers' => [
                 'Accept' => 'application/json',
             ],
             'query' => [
                'api_token'=> "ZpYtbJJ9VpofEFMZ22pxsBf0IN0eHheFW9S2goTucKlDGFrmhr0ATxpRhcal",
                 'to'=> '2347064973701, 2348060323102',
                 'from'=> 'GLOBAL MONEY NG',
                 'body'=> 'TESTING THE SMS FROM GLOBAL MONEY NG',
                 'gateway'=> '0',
                 'append_sender'=> '0',
             ],
         ]
     );
     $body = $response->getBody();
     print_r(json_decode((string) $body));



});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/index/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('user');
Route::get('/user/index/appuser/', [App\Http\Controllers\UserController::class, 'appuser'])->name('user.appuser');
Route::get('/admin/index/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('admin');
///Admin Route

//bank
Route::get('banks', [BankController::class, 'index'])->name('bank.index');
Route::post('banks/store', [App\Http\Controllers\BankController::class, 'store'])->name('banks.store');
Route::get('fetch-banks', [BankController::class, 'fetchbank']);
Route::get('edit-bank/{id}', [App\Http\Controllers\BankController::class, 'edit'])->name('banks.edit');
Route::put('update-bank/{id}', [App\Http\Controllers\BankController::class, 'update']);
Route::delete('delete-bank/{id}', [App\Http\Controllers\BankController::class, 'destroy']);

//loan
Route::get('/loan/index/', [App\Http\Controllers\LoanController::class, 'index'])->name('loan.index');
Route::get('/loan', [App\Http\Controllers\LoanController::class, 'create'])->name('user.loan');


//User or Client Route
Route::get('/user/profile/', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/user/profile/update/', [App\Http\Controllers\ProfileController::class, 'update'])->name('user.profile.update');

//Saving
Route::get('/user/saving/', [App\Http\Controllers\SavingController::class, 'create'])->name('user.saving');

//Investment
Route::get('/user/investment/', [App\Http\Controllers\InvestmentController::class, 'create'])->name('user.investment');

//payment
Route::get('/admin/payment/', [PaymentController::class, 'create'])->name('admin.payment');
Route::get('/admin/paymentindex', [PaymentController::class, 'index'])->name('admin.paymentindex');
Route::get('loan-firstname', [PaymentController::class,'selectSearch']);
Route::post('api/fetchBankName', [PaymentController::class, 'fetchBankName']);
Route::post('api/fetchBankAccount', [PaymentController::class, 'fetchBankAccount']);


Route::middleware(['admin'])->group(function () {
Route::get('/admin/saving/index', 'App\Http\Controllers\AdminSavingController@index')->name('admin.saving.index');
Route::get('/admin/saving/pending', 'App\Http\Controllers\AdminSavingController@pendingSaving')->name('admin.saving.pending');
Route::get('/admin/saving/approved', 'App\Http\Controllers\AdminSavingController@approvedSaving')->name('admin.saving.approved');
Route::get('/admin/deposit/{id}', 'App\Http\Controllers\AdminSavingController@create')->name('admin.deposit');

    ////loan
Route::get('/admin/loan/index', [AdminLoanController::class, 'index'])->name('admin.loan.index');
Route::get('/admin/loan/create', [AdminLoanController::class, 'create'])->name('admin.loan.create');
Route::post('/admin/loan/store', [AdminLoanController::class, 'store'])->name('admin.loan.store');
Route::get('/admin/loan/view', function(){return view('admin.loan.view');})->name('admin.loan.view');
Route::get('/admin/loan/pending', [AdminLoanController::class, 'pendingLoan'])->name('admin.loan.pending');
Route::get('/admin/loan/approved', [AdminLoanController::class, 'approvedLoan'])->name('admin.loan.approved');

Route::get('/admin/loan/agent/', function() { return view('admin.loan.agent'); })->name('admin.loan.agent');
Route::get('/admin/loan/getcustomer/{id}', [AdminLoanController::class, 'getCustomer']);

Route::get('/admin/profile/index/{id}', [AdminProfileController::class, 'changePassword'])->name('admin.profile.index');
Route::post('/admin/profile/update/{id}', [AdminProfileController::class, 'update'])->name('admin.profile.update');

Route::get('/admin/customer/index',function(){ return view('admin.customer.index');} )->name('admin.customer.index');

Route::get('/admin/sms/index',[AdminSmsController::class, 'index'])->name('admin.sms.index');
Route::post('/admin/sms/sendsms',[AdminSmsController::class, 'sendSms'] )->name('admin.sms.sendsms');
Route::get('/admin/sms/create', [AdminSmsController::class, 'create'])->name('admin.sms.create');

});

Route::middleware(['user'])->group(function () {
});

Route::get('/referrals/index',  'App\Http\Controllers\ReferralController@index')->name('referrals.index');
Route::post('/referrals/store', 'App\Http\Controllers\ReferralController@store')->name('referrals.store');

Route::get('/subscriptions', 'App\Http\Controllers\SubscriptionController@index')->name('subscriptions');
Route::post('/subscriptions/store', 'App\Http\Controllers\SubscriptionController@store')->name('subscriptions.store');

Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/index', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
