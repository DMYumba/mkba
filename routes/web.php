<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FileController;
use App\Models\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin group middleware
Route::middleware(['auth', 'role:admin'])->group(function(){
    //Admin dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');

    //Admin logout
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])
    ->name('admin.logout');

    //Admin profile
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])
    ->name('admin.profile');

    //Admin edit profile
    Route::get('/admin/edit_profile', [AdminController::class, 'AdminEditProfile'])
    ->name('admin.edit_profile');

    //Admin edit profile
    Route::post('/admin/profile/store', [AdminController::class, 'AdminEditProfileStore'])
    ->name('admin.profile.store');

    //Admin change password form
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])
    ->name('admin.change.password');
    
     //Admin update password
     Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])
     ->name('admin.update.password');

     //Client bio data
    Route::get('/admin/client_data{id}', [AdminController::class, 'ClientProfile'])
    ->name('admin.clientData');

     
    //Invoice file view
    Route::get('admin/viewFile{id}', [FileController::class, 'viewFile'])->name('admin.viewFile');

    //Invoice file view
    Route::get('admin/descriptFile{id}', [FileController::class, 'descriptFile'])->name('admin.descriptFile');
    
    //Update status of process
    Route::get('/admin/update_status{id}', [AdminController::class, 'UpdateStatus'])->name('admin.index');

    //Update status of process
    Route::post('/admin/status/store{id}', [AdminController::class, 'UpdateStatusStore'])->name('admin.status.store');


}); // End Admin middleware

//Client group middleware
Route::middleware(['auth', 'role:user'])->group(function(){
    Route::get('/client/dashboard', [ClientController::class, 'ClientDashboard'])
    ->name('client.dashboard');
    
    //Vehicle services

    
    //description file view
    Route::get('client/viewFile{id}', [FileController::class, 'viewFileClient'])->name('client.viewFile');

    //invoice file view
    Route::get('client/viewInvoce{id}', [FileController::class, 'viewInvoiceClient'])->name('client.viewInvoice');

    //Client vehicle clearing form
    Route::get('/client/services/vehicles/clearing', [ClientController::class, 'ClientServicesVehiclesClearing'])
    ->name('client.services.vehicles.customs_clearing');

    //Client submit vehicle clearing invoice
    Route::post('/client/services/vehicles/clearing', [ClientController::class, 'ClientServicesVehiclesStore'])
    ->name('client.services.vehicles.store');

    //Client vehicle clearing and delivery form
    Route::get('/client/services/vehicles/clearing_deliver', [ClientController::class, 'ClientServicesVehiclesDeliver'])
    ->name('client.services.vehicles.clearing_deliver');

    //Client submit vehicle clearing and delivery invoice
    Route::post('/client/services/vehicles/clearing_delivery', [ClientController::class, 'ClientServicesVehiclesDeliverStore'])
    ->name('client.services.vehiclesDeliver.store');

    //Client vehicle full service form
    Route::get('/client/services/vehicles/full_service', [ClientController::class, 'ClientServicesVehiclesFullservice'])
    ->name('client.services.vehicles.full_service');

    //Client submit vehicle full service invoice
    Route::post('/client/services/vehicles/full_service', [ClientController::class, 'ClientServicesVehiclesFullserviceStore'])
    ->name('client.services.vehiclesFullservice.store');

    //Goods services

    //Client goods service form
    Route::get('/client/services/goods/clearing', [ClientController::class, 'ClientServicesGoodsClearing'])
    ->name('client.services.goods.customs_clearing');

    //Client submit goods invoice
    Route::post('/client/services/goods/clearing', [ClientController::class, 'ClientServicesGoodsStore'])
    ->name('client.services.goods.store');

    //Client goods form
    Route::get('/client/services/goods/full_service', [ClientController::class, 'ClientServicesGoodsFullservice'])
    ->name('client.services.goods.full_service');

    //Client goods invoice
    Route::post('/client/services/goods/full_service', [ClientController::class, 'ClientServicesGoodsFullserviceStore'])
    ->name('client.services.goodsFullservice.store');

    //Client logout
    Route::get('/logout', [ClientController::class, 'CLientLogout'])
    ->name('client.logout');


}); //End user group middleware

//Agent group middleware
Route::middleware(['auth', 'role:agent'])->group(function(){
Route::get('/customer/dashboard', [CustomerController::class, 'CustomerDashboard'])
->name('customer.dashboard');
}); //End Agent group middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])
->name('admin.login');