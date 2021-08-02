<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OccupantController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;

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



Auth::routes();

//User Pages

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/agentgrid', [PagesController::class, 'agentgrid'])->name('agentg');
Route::get('/agentsingle', [PagesController::class, 'agentsingle'])->name('agents');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/property', [PagesController::class, 'property'])->name('prop');
Route::get('/sproperty', [PagesController::class, 'singleproperty'])->name('sprop');
Route::get('user/payment', [PagesController::class, 'makepay'])->name('userpay');
Route::get('user/infopayment', [PagesController::class, 'paymentinfo'])->name('infopay');
Route::get('user/cpayment', [PagesController::class, 'completepay'])->name('cpay');
Route::post('user/categories', [PagesController::class, 'categories']);
Route::post('user/get_categories', [PagesController::class, 'get_categories']);
Route::get('user/hostel', [PagesController::class, 'get_hostels']);
Route::post('user/category', [PagesController::class, 'category']);



//sending data to DB
Route::post('/contact', [ContactController::class, 'create'])->name('scontact');
Route::post('/user/infopayment', [OccupantController::class, 'create'])->name('userInfo');
Route::post('/user/payment', [PaymentController::class, 'create'])->name('payInfo');
Route::post('/message', [MessageController::class, 'create'])->name('message');




//Admin Pages

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'adminIndex'])->name('admin');
Route::get('admin/editagents', [HomeController::class, 'editagents'])->name('edagents');
Route::get('admin/edithostels', [HomeController::class, 'edithostels'])->name('edhostels');
Route::get('admin/moreinfo', [HomeController::class, 'moreinfo'])->name('info');
Route::get('admin/addhostel', [HomeController::class, 'addhostel'])->name('addhostel');
Route::get('admin/addagent', [HomeController::class, 'addagent'])->name('addagent');
Route::get('admin/hostellist', [HomeController::class, 'hostellist'])->name('hostellist');
Route::get('admin/agentlist', [HomeController::class, 'agentlist'])->name('agentlist');
Route::get('admin/profile', [HomeController::class, 'adminprofile'])->name('profile');
Route::get('admin/subscribes', [HomeController::class, 'subscribe'])->name('sub');
Route::get('admin/messages', [HomeController::class, 'message'])->name('message');
Route::get('admin/calender', [HomeController::class, 'calender'])->name('calender');

//Delete Messages
Route::get('admin/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('message.destroy');

//category pages
Route::get('admin/category', [CategoryController::class, 'index'])->name('category');
Route::post('admin/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('admin/categories', [CategoryController::class, 'categories']);
Route::post('admin/categoryid', [CategoryController::class, 'category']);
Route::post('admin/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('admin/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


//Agent pages
Route::get('admin/agent', [AgentController::class, 'index'])->name('adminagent');
Route::post('admin/agent/create', [AgentController::class, 'create'])->name('adminagent.create');
Route::get('admin/agents', [AgentController::class, 'agents']);
Route::get('admin/allagents', [AgentController::class, 'all_agents']);
Route::post('admin/agentid', [AgentController::class, 'agent']);
Route::post('admin/agent/update', [AgentController::class, 'update'])->name('agent.update');
Route::delete('admin/agent/delete/{id}', [AgentController::class, 'destroy'])->name('agent.destroy');


//Hostel pages
Route::get('admin/hostel', [HostelController::class, 'index'])->name('hostel');
Route::post('admin/hostel/create', [HostelController::class, 'create'])->name('hostel.create');
Route::get('admin/hostels', [HostelController::class, 'hostels']);
Route::post('admin/hostelid', [HostelController::class, 'hostel']);
Route::post('admin/hostel/update', [HostelController::class, 'update'])->name('hostel.update');
Route::delete('admin/hostel/delete/{id}', [HostelController::class, 'destroy'])->name('hostel.destroy');
Route::get('admin/hostel/categories', [HostelController::class, 'categories']);


//Payment pages
Route::get('admin/payment', [PaymentController::class, 'index'])->name('adminpay');
Route::get('admin/payments', [PaymentController::class, 'payments']);
Route::post('admin/paymentid', [PaymentController::class, 'payment']);
Route::delete('admin/payments/delete/{id}', [PaymentController::class, 'destroy'])->name('pay.destroy');
// Payment API
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payments/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);

//Occupants pages
Route::get('admin/occupant', [OccupantController::class, 'index'])->name('occupant');
Route::get('admin/occupants', [OccupantController::class, 'occupants']);
Route::post('admin/occupantid', [OccupantController::class, 'occupant']);
Route::post('admin/occupant/update', [OccupantController::class, 'update'])->name('occupant.update');
Route::delete('admin/occupants/delete/{id}', [OccupantController::class, 'destroy'])->name('occupant.destroy');



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


