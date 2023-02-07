<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

// Landing Page & General Page Routes
Route::get('/', function () {
    return view('index');
})->name('home');

// Admin User Routes

// admin landing
Route::get('/admin', function () {
    return view('admin_user/index');
})->name('admin-landing');

// admin login
Route::get('/admin/login', function () {
    return view('admin_user/login');
})->name('admin-login');

// Protected
// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin_user/dashboard');
})->name('admin-dashboard');

// TRASNPORT ROUTES
// All Available routes
Route::get('/admin/routes', [RoutesController::class, 'index'])->name('admin-routes');

// Add Route
Route::get('/admin/routes/add', [RoutesController::class, 'create'])->name('admin-add-route');

// Post Route
Route::post('/admin/routes/', [RoutesController::class, 'store']);

// Edit Route
Route::get('/admin/routes/{id}/edit', [RoutesController::class, 'edit'])->name('admin-edit-route');

// Update edited route
Route::put('/admin/routes/{id}', [RoutesController::class, 'update']);

// Single Route
Route::get('/admin/routes/{id}', [RoutesController::class, 'show'])->name('admin-single-route');

// VEHICLE ROUTES
// All Available vehicles
Route::get('/admin/vehicles', [VehicleController::class, 'index'])->name('admin-vehicles');

// single vehicle
Route::get('/admin/vehicles/{id}', [VehicleController::class, 'show'])->name('admin-single-vehicles');

// Add Vehicle
Route::get('/admin/vehicles/add', [VehicleController::class, 'create'])->name('admin-add-vehicle');

// ------------------------------------------------------------------------------- //

// Client User Routes
Route::get('/client', function () {
    return view('client_user/index');
})->name('client-landing');

// client login
Route::get('/client/login', function () {
    return view('client_user/login');
})->name('client-login');

// client dashboard
Route::get('/client/dashboard', function () {
    return view('client_user/dashboard');
})->name('client-dashboard');

// Add cargo
Route::get('/client/cargo/add', function () {
    return view('client_user/cargo/add');
})->name('client-add-cargo');

// track cargo
Route::get('/client/cargo/track', function () {
    return view('client_user/cargo/track');
})->name('client-track-cargo');

// view cargo
Route::get('/client/cargo/all', function () {
    return view('client_user/cargo/all');
})->name('client-view-cargo');

// single cargo
Route::get('/client/cargo/{id}', function () {
    return view('client_user/cargo/single');
})->name('client-single-cargo');

// pickup report
Route::get('/client/status/pickup', function () {
    return view('client_user/status/pickup');
})->name('client-pickup-report');

// delivery report
Route::get('/client/status/delivery', function () {
    return view('client_user/status/delivery');
})->name('client-delivery-report');

// users
Route::get('/client/users', function () {
    return view('client_user/users');
})->name('client-users');

// add users
Route::get('/client/users/add', function () {
    return view('client_user/adduser');
})->name('client-add-user');

// invoice
Route::get('/client/invoice', function () {
    return view('client_user/finance/invoice');
})->name('client-invoice');

// transactions
Route::get('/client/transactions', function () {
    return view('client_user/finance/transactions');
})->name('client-transactions');

// ------------------------------------------------------------------------------- //

// Transporter User Routes
Route::get('/transporter', function () {
    return view('transporter_user/index');
})->name('transporter-landing');

// dasdboard
Route::get('/transporter/dashboard', function () {
    return view('transporter_user/dashboard');
})->name('transporter-dashboard');

// users
Route::get('/transporter/users', function () {
    return view('transporter_user/users');
})->name('transporter-users');

// add users
Route::get('/transporter/users/add', function () {
    return view('transporter_user/adduser');
})->name('transporter-add-user');

// invoice
Route::get('/transporter/invoice', function () {
    return view('transporter_user/finance/invoice');
})->name('transporter-invoice');

// transactions
Route::get('/transporter/transactions', function () {
    return view('transporter_user/finance/transactions');
})->name('transporter-transactions');

// add vehicle
Route::get('/transporter/vehicles/add', function () {
    return view('transporter_user/vehicles/add');
})->name('transporter-add-vehicle');

// view vehicles
Route::get('/transporter/vehicles', function () {
    return view('transporter_user/vehicles/all');
})->name('transporter-view-vehicles');

// track vehicle
Route::get('/transporter/vehicles/track', function () {
    return view('transporter_user/vehicles/track');
})->name('transporter-track-vehicle');

// pickup report
Route::get('/transporter/status/pickup', function () {
    return view('transporter_user/status/pickup');
})->name('transporter-pickup-report');

// delivery report
Route::get('/transporter/status/delivery', function () {
    return view('transporter_user/status/delivery');
})->name('transporter-delivery-report');

// view products for sale
Route::get('/transporter/products', function () {
    return view('transporter_user/products/all');
})->name('transporter-view-products');
