<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PiecesMusicalsController;

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

// Route::get('/Client', [ControllerCLient::class,'Client'] 
   
// );
// Route::get('/ClientForm', [ControllerCLient::class,'ClientPost'] 
   
// );
// Route::get('/', [ControllerCLient::class,'Login']);

// Route::post('/authentification', [ControllerCLient::class,'authentification']);


// Route::get('/signup', [ControllerCLient::class,'signUp'] 
   
// );
// Route::POST('/ajoutClient/traitement', [ControllerCLient::class,'register'] 
   
// );
// Route::get('/artiste/create', [ControllerArtist::class,'create']);
// Route::post('/artiste/store', [ControllerArtist::class,'createArtiste']);


// Route::get('/home', [ControllerCLient::class,'home'] 
   
// );


// route::get('/',)
Route::get('/home', [Pages::class,'home'] );


Route::get('/signup', [Pages::class,'signUp'] );
Route::post('/register', [UserController::class,'register'] );



Route::get('/artiste/create', [Pages::class,'ArtistView'])->middleware(['auth','isAdmin']);
Route::post('/artiste/store', [ArtistController::class,'createArtiste']);



Route::get('/', [Pages::class,'Login']);
Route::Post('/login', [UserController::class,'loginPost']);


Route::get('/listUsers', [UserController::class,'index'])->middleware(['auth','isAdmin']);
// Route::Post('/login', [UserController::class,'loginPost']);

Route::get('/addpiecemusical', [Pages::class,'addPieceMusical'])->middleware(['auth','isAdmin']);
Route::post('/music/addpiecemusical', [PiecesMusicalsController::class,'createPiece']);







Route::fallback(function(){

    return view('Page404');

});