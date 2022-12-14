<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ProjectController;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

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

Route::get('/',function(){
    return Inertia::render('Home');
});

Route::get('/projects',[ProjectController::class,'show']);

Route::get('/contacts',function(){
    return Inertia::render("Contacts");
});

Route::get('/about-me',function(){
    return Inertia::render("About-me");
});

Route::get('/curriculum',function(){
    return Inertia::render("Curriculum");
});

Route::get('/download-curriculum',function(){
    $headers =['Content-Type: application/pdf'];
    return response()->download(public_path('files/CHRISTIAN LIMA SANTANA.pdf'),'Christian-Santana-CV.pdf',$headers);
});

Route::post('/addimage',[ImageController::class,'create']);