<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AxController;
use App\Http\Controllers\LogAppController;

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

// CLEAR CACHE
Route::get('/clear-cache', function() {
	$exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('optimize:clear'); 
    $exitCode4 = Artisan::call('route:clear');
    $exitCode5 = Artisan::call('view:clear');
    $exitCode6 = Artisan::call('config:cache');
    return "Cache Clear : ".$exitCode1."<br>"."Optimize Clear : ".$exitCode2."<br>"."Routed Clear : ".$exitCode4."<br>"."View Cache Clear : ".$exitCode5."<br>"."Config Cache Clear : ".$exitCode6."<br>"; 
});

// MIDDLEWARE XSS
Route::middleware(['XssSanitizer'])->group(function () {
 
    // web route
    Route::get('/',[AxController::class, 'index']);
    Route::get('/about',[AxController::class, 'about']);
    Route::get('/why-choose-us',[AxController::class, 'why']);
    Route::get('/promo_dan_pricelist',[AxController::class, 'promo_dan_pricelist']);
    Route::get('/portfolio',[AxController::class, 'portfolio']);
    Route::post('/submit_pl',[AxController::class, 'submit_pl']);
    Route::get('/detail_portfolio/{id}',[AxController::class, 'detail_portfolio']);
    Route::get('/contact',[AxController::class, 'contact']);
    Route::post('/contact-us',[AxController::class, 'send_contact']);
    Route::get('/testimonial',[AxController::class, 'testimoni']);
    Route::get('/our-promise',[AxController::class, 'our_promise']);
    Route::get('/gown-and-suit',[AxController::class, 'gown_suit']);
    // landing page
    Route::get('/promo-voucher',[AxController::class, 'promovoucher']);
    Route::get('/chatcs',[AxController::class, 'chatcs']);
    Route::get('/wacs',[AxController::class, 'wacs']);
    Route::get('/kontakcs',[AxController::class, 'kontakcs']);
    Route::get('/kawaiistudio',[AxController::class, 'kawai']);
    Route::get('/kamar-motret',function(){
        return view('kamarmotret');
    });
    // administrator
    Route::get('/logadminalexander',[LogAppController::class, 'log_user']);
    Route::post('/log_process',[LogAppController::class, 'log_process']);
    Route::get('/admin/logout',[LogAppController::class, 'logout']);

    Route::middleware(['cekLogin'])->group(function () {
        Route::get('/admin/dashboard',[LogAppController::class, 'dashboard']);
        Route::get('/dashboard',[LogAppController::class, 'dashboard2']);
        Route::get('/admin/home',[LogAppController::class, 'home']);
        Route::post('/admin/updatehome1',[LogAppController::class, 'updatehome1']);
        Route::post('/admin/updatehome2',[LogAppController::class, 'updatehome2']);
        Route::post('/admin/updatehome3',[LogAppController::class, 'updatehome3']);
        Route::get('/admin/about',[LogAppController::class, 'about']);
        Route::post('/admin/updateabout1',[LogAppController::class, 'updateabout1']);
        Route::post('/admin/updateabout2',[LogAppController::class, 'updateabout2']);
        Route::post('/admin/updateabout3',[LogAppController::class, 'updateabout3']);
        Route::post('/admin/updateabout4',[LogAppController::class, 'updateabout4']);
        Route::get('/admin/permintaan',[LogAppController::class, 'permintaan']);
        Route::get('/admin/detail_permintaan/{id}',[LogAppController::class, 'detail_permintaan']);
        Route::post('/admin/reply_permintaan',[LogAppController::class, 'reply_permintaan']);
        Route::get('/admin/promo_and_pricelist',[LogAppController::class, 'promo_and_pricelist']);
        Route::get('/admin/tambah_promo',[LogAppController::class, 'tambah_promo']);
        Route::get('/admin/portfolio',[LogAppController::class, 'portfolio']);
        Route::post('/admin/simpan_promo',[LogAppController::class, 'simpan_promo']);
        Route::post('/admin/update_promo',[LogAppController::class, 'update_promo']);
        Route::get('/admin/edit_port/{id}',[LogAppController::class, 'edit_port']);
        Route::get('/admin/contact',[LogAppController::class, 'contact']);
        Route::get('/admin/detail_kontak/{id}',[LogAppController::class, 'detail_kontak']);
        Route::post('/admin/update_contact',[LogAppController::class, 'update_contact']);
        Route::get('/admin/hapus_kontak/{id}',[LogAppController::class, 'hapus_kontak']);
        Route::post('/admin/reply_kontak',[LogAppController::class, 'reply_kontak']);
        Route::get('/admin/tambah_port',[LogAppController::class, 'tambah_port']);
        Route::get('/admin/tambah_galeri',[LogAppController::class, 'tambah_galeri']);
        Route::post('/admin/simpan_galeri',[LogAppController::class, 'simpan_galeri']);
        Route::post('/admin/update_galeri',[LogAppController::class, 'update_galeri']);
        Route::get('/admin/testimonial',[LogAppController::class, 'testimonial']);
        Route::get('/admin/tambah_testimoni',[LogAppController::class, 'tambah_testimoni']);
        Route::post('/admin/simpan_testimoni',[LogAppController::class, 'simpan_testimoni']);
        Route::get('/admin/edit_testimoni/{id}',[LogAppController::class, 'edit_testimoni']);
        Route::post('/admin/update_testimoni',[LogAppController::class, 'update_testimoni']);
        Route::get('/admin/hapus_testimoni/{id}',[LogAppController::class, 'hapus_testimoni']);
        Route::post('/admin/simpan_port',[LogAppController::class, 'simpan_port']);
        Route::get('/admin/hapus_port/{id}',[LogAppController::class, 'hapus_port']);
        Route::get('/admin/edit_port/{id}',[LogAppController::class, 'edit_port']);
        Route::post('/admin/update_port',[LogAppController::class, 'update_port']);
        Route::post('/admin/update_akun',[LogAppController::class, 'update_akun']);
        Route::post('/admin/update_email',[LogAppController::class, 'update_email']);
        Route::get('/admin/customer',[LogAppController::class, 'customer']);
        // Route::get('/admin/',[LogAppController::class, '']);
        // Route::get('/admin/',[LogAppController::class, '']);
        // Route::get('/admin/',[LogAppController::class, '']);
    });

});


// route CI
// $route['logadminalexander'] 	= "log_app/log_user";
// $route['about'] 				= "start_enggine/about";
// $route['why-choose-us'] 		= "start_enggine/why";
// $route['promo_dan_pricelist']	= "start_enggine/promo_dan_pricelist";
// $route['portfolio']				= "start_enggine/portfolio";
// $route['log_process']			= "admin/log_process";
// $route['submit_pl']				= "start_enggine/submit_pl";
// $route['detail_portfolio/(:any)'] = "start_enggine/detail_portfolio/$1";
// $route['contact'] 				= "start_enggine/contact";
// $route['contact_us']			= "start_enggine/send_contact";
// $route['testimonial']			= "start_enggine/testimoni";
// $route['our-promise']			= "start_enggine/our_promise";
// $route['gown-and-suit']			= "start_enggine/gown_suit";
// $route['promo-voucher']			= "start_enggine/promovoucher";
