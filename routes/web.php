<?php

use App\Models\Team;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderNowController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialController;

// Public Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/masterchefs', [TeamController::class, 'team_font'])->name('font.team');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');

Route::get('/order-now', [OrderNowController::class, 'odernow'])->name('order.now');
Route::post('/order-create', [OrderNowController::class, 'orderCreate'])->name('order.create');
Route::get('/order-list', [OrderNowController::class, 'orderStore'])->name('order.list');

Route::post('/order-accept/{id}', [OrderNowController::class, 'orderaccept'])->name('order.accept');
Route::post('/order-reject/{id}', [OrderNowController::class, 'orderreject'])->name('order.reject');

Route::get('/my-orders', [OrderNowController::class, 'showOrders'])->name('dashboard.showorder');



Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Authentication Routesa
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [RegisterController::class, 'register'])->name('customer.register');
Route::post('/customer-create', [RegisterController::class, 'customerCreate'])->name('customer.create');

Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');


// Dashboard Routes
Route::get('/user/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard')->middleware('user');
Route::get('/user/dashboard/alluser', [DashboardController::class, 'allUsers'])->name('dashboard.alluser');
Route::get('/user/dashboard/edituser/{id}', [UserController::class, 'edit'])->name('dashboard.edituser');

// Admin Dashboard




// User Update and Delete Routes
Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin')->middleware('admin');

Route::get('/admin/home/dashboard', [OrderNowController::class, 'homeDashboard'])->name('home.dashboard');


//Our cake

Route::get('/add-cake', [ServiceController::class, 'add_cake'])->name('addCake');

Route::get('/all-cake', [ServiceController::class, 'show'])->name('allCake');

Route::post('/cake_store', [ServiceController::class, 'cakestore'])->name('cakeStore');

Route::get('/cakes/{id}/edit', [ServiceController::class, 'edit'])->name('editCake');

Route::post('/cakes/update/{id}', [ServiceController::class, 'update'])->name('updateCake');

Route::delete('/cakes/delete/{id}', [ServiceController::class, 'delete'])->name('deleteCake');

Route::post('/datastore', [ContactController::class, 'datastore'])->name('datastore');
Route::get('/admin/all-contact', [ContactController::class, 'show'])->name('allcontact');


Route::get('/admin/addmember', [TeamController::class, 'team'])->name('addmember');
Route::post('/admin/addmember_store', [TeamController::class, 'teamstore'])->name('addmemberStore');
Route::get('/admin/allmember', [TeamController::class, 'teamshow'])->name('allmember');
Route::get('/edit_member/{id}', [TeamController::class, 'edit_member'])->name('edit_member');

Route::post('/admin/update_member/{id}', [TeamController::class, 'update_member'])->name('update_member'); // Route to delete a member
Route::delete('/admin/delete_member/{id}', [TeamController::class, 'delete_member'])->name('delete_member');
