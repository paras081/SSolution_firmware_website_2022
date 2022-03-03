<?php


use App\Http\Controllers\contactUsController;
use App\Http\Controllers\technologyController;
use App\Http\Controllers\newsFeedController;
use Illuminate\Support\Facades\Route;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/contactUs',[contactUsController::class,'index']);

Route::get('/aboutUs',[contactUsController::class,'create']);

Route::get('/insertTech',[technologyController::class,'insertTech'])->name('insertTech');
Route::post('/insertTech',[technologyController::class,'storeTech'])->name('storeTech');


Route::get('/insertNewsFeed',[newsFeedController::class,'insertNewsFeed'])->name('insertNewsFeed');
Route::post('/insertNewsFeed',[newsFeedController::class,'storeNewsFeed'])->name('storeNewsFeed');

Route::get('/career',function () {
    return view('career');
});


//view for insert
//route(named route) for insert operation-->get
//route(named route) for insert operation-->put
//define insert method inside controller


