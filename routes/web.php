<?php


Route::get('/', function () {
    return view('welcome');
});
//Logout
Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/CreateAccount','PagesController@showAccountCreation')->name('showAccountCreation');
Route::post('/CreateAccount','SystemUsersController@createSystemUser')->name('showAccountCreation.submit');



;



//Admin Routes
Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home','AdminController@index')->name('admin.home');

});
Route::get('login/saccomanager','Auth\LoginController@showSaccoManagerLoginForm')->name('saccomanagerLogin');
Route::post('login/saccomanager','Auth\LoginController@saccoManagerLogin')->name('saccomanagerLogin.submit');

Route::prefix('SaccoManager')->group(function (){
    Route::get('','SaccoManagerController@myDashBoard')->name('smdashboard');
    Route::get('/New_Vehicle','SaccoManagerController@newVehicleRegistrationForm')->name('newVehicle');
    Route::post('/New_Vehicle','SaccoManagerController@saveVehicleDetails')->name('newVehicle.submit');
    Route::get('/New_Owner','SaccoManagerController@newOwnerRegistrationForm')->name('newOwner');
    Route::post('/New_Owner','SaccoManagerController@saveOwnerDetails')->name('newOwner.submit');
    Route::get('/New_Driver','SaccoManagerController@newDriverRegistrationForm')->name('newDriver');
    Route::post('/New_Driver','SaccoManagerController@saveDriverDetails')->name('newDriver.submit');

    //Reports
    Route::get('/All_Vehicles','SaccoManagerController@getAllVehicles')->name('allVehicles');

});

//System Admin
Route::prefix('systemadmin')->group(function () {
    Route::get('/login','Auth\LoginController@showSystemAdminLoginForm')->name('adminLogin');
    Route::post('/login','Auth\LoginController@systemAdministratorLogin')->name('systemadmin-login.submit');
});

//System Administrator;
Route::prefix('SystemAdministrator')->group(function (){
    Route::get('','SystemAdminController@myDashBoard')->name('systemadmindashboard');
    Route::get('New_Sacco','SystemAdminController@showNewSaccoRegistrationForm')->name('newSaccoForm');
    Route::post('New_Sacco','SystemAdminController@saveSaccoDetails')->name('newSaccoForm.submit');

});

//Route
Route::get('confirm_registration','PagesController@showConfirmRegistrationForm')->name('confirmRegistration');
Route::post('confirm_registration','PagesController@confirmRegistration')->name('confirmRegistration.submit');

Route::get('complete_registration/{idnumber}','PagesController@showCompleteRegistrationForm')->name('completeregistration');
Route::post('complete_registration','SystemUsersController@storeSaccoManagerDetails')->name('newSaccoManager.submit');





