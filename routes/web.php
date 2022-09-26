<?php

use Illuminate\Support\Facades\Route;
use App\Models\Http\Controllers\Auth\LoginController;
use App\Models\Http\Controllers\SliderController;
use App\Models\Http\Controllers\HomepageController;
use App\Models\Http\Controllers\PartnerController;
use App\Models\Http\Controllers\ClientController;
use App\Models\Http\Controllers\ValueController;
use App\Models\Http\Controllers\ServiceController;
use App\Models\Http\Controllers\ContactController;
use App\Models\Http\Controllers\FooterController;
use App\Models\Http\Controllers\HomeController;
use App\Models\Http\Controllers\VsapController;
use App\Models\Http\Controllers\EmailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/sweetalert', function () {
    return view('sweetalert');
});

Route::get('/contactalert', function () {
    return view('contactalert');
});



Route::get('/home', function () {
    return view('cawebsite.home');
});

Route::get('/partner', function () {
    return view('about.partner');
});


Route::get('/partner2', function () {
    return view('about.partner2');
});

// Route::get('/client2', function () {
//     return view('php artisan ui bootstrap --authabout.client2');
// });
Route::get('/values1', function () {
    return view('about.values1');
});

Route::get('/career', function () {
    return view('cawebsite.career');
});

Route::get('/contact', function () {
    return view('cawebsite.contact');
});
// Route::get('/services', function () {
//     return view('cawebsite.services');
// });
Route::get('/services2', function () {
    return view('cawebsite.services2');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/store', [VsapController::class, 'createfile']);

 Route::get('/', [HomeController::class, 'index']);

Route::get('/values1', [HomeController::class, 'value']);

Route::get('/partner2', [HomeController::class, 'partner']);

Route::get('/client2', [HomeController::class, 'client']);

Route::get('/career', [HomeController::class, 'career']);

Route::get('/services2', [HomeController::class, 'service']);

Route::get('/footer', [HomeController::class, 'footer']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/sendmail', [EmailController::class, 'mail']);



Route::get('/vsaps', [VsapController::class, 'index']);

Route::get('/showvsap/{id}', [VsapController::class, 'show']);

Route::get('/destroyvsaps/{id}', [VsapController::class, 'destroy']);


//Slider Controller
Route::get('/sliders', [SliderController::class, 'index']);

 Route::get('/createslider', [SliderController::class, 'create']);

Route::get('/editslider/{id}', [SliderController::class, 'edit']);

Route::post('/storeslider', [SliderController::class, 'store']);

Route::post('/updateslider', [SliderController::class, 'update']);

Route::get('/destroyslider/{id}', [SliderController::class, 'destroy']);


//Homepage Controller

 Route::get('/homepages', [HomepageController::class, 'index']);

 Route::get('/createhome', [HomepageController::class, 'create']);

Route::get('/edithome/{id}', [HomepageController::class, 'edit']);

Route::post('/storehome', [HomepageController::class, 'store']);

Route::post('/updatehome', [HomepageController::class, 'update']);

Route::get('/destroyhome/{id}', [HomepageController::class, 'destroy']);


//Partner Controller

Route::get('/partners', [PartnerController::class, 'index']);

 Route::get('/createpartner', [PartnerController::class, 'create']);

Route::get('/editpartner/{id}', [PartnerController::class, 'edit']);

Route::post('/storepartner', [PartnerController::class, 'store']);

Route::post('/updatepartner', [PartnerController::class, 'update']);

Route::get('/destroypartner/{id}', [PartnerController::class, 'destroy']);


//Client Controller

Route::get('/clients', [ClientController::class, 'index']);

 Route::get('/createclient', [ClientController::class, 'create']);

Route::get('/editclient/{id}', [ClientController::class, 'edit']);

Route::post('/storeclient', [ClientController::class, 'store']);

Route::post('/updateclient', [ClientController::class, 'update']);

Route::get('/destroyclient/{id}', [ClientController::class, 'destroy']);


//Value Controller

Route::get('/values', [ValueController::class, 'index']);

Route::get('/createvalue', [ValueController::class, 'create']);

Route::get('/editvalue/{id}', [ValueController::class, 'edit']);

Route::post('/storevalue', [ValueController::class, 'store']);

Route::post('/updatevalue', [ValueController::class, 'update']);

Route::get('/destroyvalue/{id}', [ValueController::class, 'destroy']);


//service Controller

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/createservice', [ServiceController::class, 'create']);

Route::get('/editservice/{id}', [ServiceController::class, 'edit']);

Route::post('/storeservice', [ServiceController::class, 'store']);

Route::post('/updateservice', [ServiceController::class, 'update']);

Route::get('/destroyservice/{id}', [ServiceController::class, 'destroy']);


//Contact Controller

Route::get('/contacts', [ContactController::class, 'index']);

Route::get('/createcontact', [ContactController::class, 'create']);

Route::get('/editcontact/{id}', [ContactController::class, 'edit']);

Route::post('/storecontact', [ContactController::class, 'store']);

Route::post('/updatecontact', [ContactController::class, 'update']);

Route::get('/destroycontact/{id}', [ContactController::class, 'destroy']);



//Footer Controller

Route::get('/footers', [FooterController::class, 'index']);

Route::get('/createfooter', [FooterController::class, 'create']);

Route::get('/editfooter/{id}', [FooterController::class, 'edit']);

Route::post('/storefooter', [FooterController::class, 'store']);

Route::post('/updatefooter', [FooterController::class, 'update']);

Route::get('/destroyfooter/{id}', [FooterController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
