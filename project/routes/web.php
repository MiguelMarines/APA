<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\nefropediatriaController;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

Route::get('/', function ()
{
    return view('home');
})->middleware('auth');

Route::resource('beneficiario',BeneficiarioController::class)->middleware('auth');
Route::resource('register',BeneficiarioController::class)->middleware('auth');

Route::resource('beneficiario.nefropediatria',nefropediatriaController::class)->shallow()->middleware('auth');


Auth::routes(['reset'=>false]);

Route::get('/home', function ()
{
    return view('home');
})->middleware('auth');

Route::group(['middleware' => 'auth'],  function ()
{
    return view('/home');
});

Route::post('/beneficiarios/search', ['as' => 'search-beneficiarios', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiarios']);
Route::post('/beneficiarios/searchmunicipio', ['as' => 'search-beneficiarios-municipio', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiariosMunicipio']);
Route::post('/beneficiarios/searchage', ['as' => 'search-beneficiarios-age', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiariosAge']);


//Route::get('/usuarios',[App\Http\Controllers\registrarUsuariosController::class,'index'])->name('registrarUsuario')->middleware('auth');

Route::get('/beneficiario/{beneficiario}/datos', [BeneficiarioController::class, 'getBeneficiarioData'])->middleware('auth');
