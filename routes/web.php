<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Auth\UserAuthentication;
use App\Http\Controllers\LoggedInController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;

Route::get('/', [GuestController::class, 'index']);
Route::get('company', [GuestController::class, 'company']);
Route::get('news', [GuestController::class, 'news']);
Route::get('login', [GuestController::class, 'login'])->name('login');
Route::get('register', [GuestController::class, 'register']);
Route::get('propertyDetails/{id}', [GuestController::class, 'propertyDetails']);
Route::post('newSubscriber', [GuestController::class, 'newSubscriber']);
Route::post('newMessage', [GuestController::class, 'newMessage']);
Route::get('detailedNews/{id}', [GuestController::class, 'detailedNews']);

Route::get('news', [GuestController::class, 'news']);
Route::get('all', [GuestController::class, 'all'])->name('all');
Route::get('buy/{item}', [GuestController::class, 'buy'])->name('buy');
Route::get('rent/{item}', [GuestController::class, 'rent'])->name('rent');
Route::post('UserRegister', [UserAuthentication::class, 'UserRegister']);
Route::post('UserLogin', [UserAuthentication::class, 'UserLogin']);
Route::middleware('auth')->group(function () {
    Route::post('newWanted', [LoggedInController::class, 'newWanted']);
    Route::get('addNewProperty', [LoggedInController::class, 'addNewProperty']);
    Route::post('newProperty', [LoggedInController::class, 'newProperty']);
    Route::get('wanted', [GuestController::class, 'wanted']);
    Route::post('newWanted', [LoggedInController::class, 'newWanted']);
    Route::post('logout', [UserAuthentication::class, 'logout'])->name('logout');
    Route::post('editProfile', [LoggedInController::class, 'editProfile'])->name('editProfile');
    Route::get('editProfileFrm', [LoggedInController::class, 'editProfilefrm'])->name('editProfilefrm');

});
Route::middleware(Admin::class)->group(function () {
    Route::get('adminDashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('adminApprovedProperties', [AdminController::class, 'adminApprovedProperties'])->name('admin.approvedProperties');
    Route::get('adminPendingProperties', [AdminController::class, 'adminPendingProperties'])->name('admin.pendingProperties');
    Route::get('adminWanted', [AdminController::class, 'adminWanted'])->name('admin.wanted');
    Route::get('adminHomebanner', [AdminController::class, 'adminHomebanner'])->name('admin.homebanner');
    Route::post('upload', [AdminController::class, 'upload'])->name('upload');
    Route::get('fetch', [AdminController::class, 'fetch'])->name('fetch.images');
    Route::delete('remove/{img}', [AdminController::class, 'remove'])->name('remove');
    Route::put('updatePropertyStatus/{id}', [AdminController::class, 'updatePropertyStatus'])->name('properties.updateStatus');
    Route::put('approveProperty/{id}', [AdminController::class, 'approveProperty'])->name('properties.approve');
    Route::delete('deleteProperty/{id}', [AdminController::class, 'deleteProperty'])->name('properties.destroy');
    Route::put('updateProperty/{id}', [AdminController::class, 'updateProperty'])->name('properties.update');
    Route::delete('adminWantedDelete/{id}', [AdminController::class, 'adminWantedDelete'])->name('admin.wanted.destroy');
    Route::put('adminWantedComplete/{id}', [AdminController::class, 'adminWantedComplete'])->name('admin.wanted.complete');
    Route::put('addToBanner/{id}', [AdminController::class, 'addToBanner']);
    Route::delete('removeFromBanner/{id}', [AdminController::class, 'removeFromBanner']);
    Route::get('newNews', [AdminController::class, 'newNews'])->name('admin.newNews');
    Route::post('addNewNews', [AdminController::class, 'addNewNews'])->name('admin.addNewNews');
    Route::get('adminNews', [AdminController::class, 'adminNews'])->name('admin.adminNews');
    Route::delete('deleteNews/{id}', [AdminController::class, 'deleteNews'])->name('deleteNews');

});

Route::middleware(SuperAdmin::class)->group(function(){
    Route::post('newAdmin', [SuperAdminController::class, 'newAdmin'])->name('newAdmin');
    Route::get('newAdminfrm', [SuperAdminController::class, 'newAdminfrm'])->name('newAdminfrm');

});