<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BandeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PiecesMusicalsController;
use App\Models\PieceMusical;

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

//  List Of users 

Route::get('/admin/dashboard', [UserController::class, 'index'])->middleware(['auth', 'isAdmin']);
Route::delete('/user/delete/{user}', [UserController::class, 'delete']);



// Home Page
Route::get('/', [Pages::class, 'home']);


//  Register
Route::get('/signup', [Pages::class, 'signUp']);
Route::post('/register', [UserController::class, 'register']);

// Login And logout

Route::get('/login', [Pages::class, 'Login'])->name('login');
Route::Post('/loginPost', [UserController::class, 'loginPost']);
Route::Post('/Users/logout', [UserController::class, 'logout']);


// Artiste Route
Route::get('/artiste/create', [Pages::class, 'ArtistView'])->middleware(['auth', 'isAdmin']);
Route::get('/artiste/list', [ArtistController::class, 'index'])->middleware(['auth', 'isAdmin']);
Route::POST('/artiste/edit/{artiste}', [ArtistController::class, 'edit'])->middleware(['auth', 'isAdmin']);

Route::post('/artiste/store', [ArtistController::class, 'createArtiste']);
Route::delete('/artiste/delete/{artiste}', [ArtistController::class, 'delete']);
Route::patch('/artiste/update/{artiste}', [ArtistController::class, 'update']);


// Bande Route
Route::get('/bands/create', [Pages::class, 'bandsAdd'])->middleware(['auth', 'isAdmin']);
Route::get('/band/list', [BandeController::class, 'index'])->middleware(['auth', 'isAdmin']);
Route::POST('/band/edit/{band}', [BandeController::class, 'edit'])->middleware(['auth', 'isAdmin']);
Route::post('/band/store', [BandeController::class, 'createBand']);
Route::patch('/band/update/{band}', [BandeController::class, 'update']);
Route::delete('/band/delete/{band}', [BandeController::class, 'delete']);

// Route Music

Route::get('/music/create', [Pages::class, 'music'])->middleware(['auth', 'isAdmin']);
Route::get('/music/list', [PiecesMusicalsController::class, 'index'])->middleware(['auth', 'isAdmin']);
Route::get('/music/page/{music}', [Pages::class, 'musicPage']);
Route::post('/music/edit/{music}', [Pages::class, 'edit'])->middleware(['auth', 'isAdmin']);
Route::post('/music/store', [PiecesMusicalsController::class, 'createPiece']);
Route::post('/music/{music}/like', [PiecesMusicalsController::class, 'like']);
Route::delete('/music/{music}/unlike', [PiecesMusicalsController::class, 'unlike']);
Route::get('/music/list/liked', [PiecesMusicalsController::class, 'likedMusic'])->middleware(['auth', 'isUser']);
Route::post('/music/{music}/comment', [PiecesMusicalsController::class, 'comment']);
Route::get('/music/list/commentmusic', [PiecesMusicalsController::class, 'commentMusic']);



Route::patch('/music/update/{music}', [PiecesMusicalsController::class, 'update']);
Route::delete('/music/delete/{music}', [PiecesMusicalsController::class, 'delete']);



// Admin Route
// Route::get('/admin/dashboard', [Pages::class, 'dashboardADmin'])->middleware(['auth', 'isAdmin']);
// Route::post('/artiste/store', [ArtistController::class,'createArtiste']);




Route::get('/addpiecemusical', [Pages::class, 'addPieceMusical'])->middleware(['auth', 'isAdmin']);





// Route 404 Page

Route::fallback(function () {

    return view('Page404');
});
