<?php

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




Route::resource('contact', controller:\App\Http\Controllers\ContactController::class);

  Route::group(['middleware' => ['auth:sanctum', 'verified'],
  'middleware' => 'SetLocale'],function(){
      
    Route::group(['middleware'  => 'role:chefprojet', 'prefix' => 'chef' , 'as' => 'chef.'], function(){
        Route::resource(name:'projets' , controller:\App\Http\Controllers\ChefProjet\ChefProjetController::class);
    });
    Route::group(['middleware'  => 'role:consultant', 'prefix' => 'consult' , 'as' => 'consultants.'], function(){
        Route::resource(name:'phases' , controller:\App\Http\Controllers\Consultant\ConsultantController::class);
    });

      Route::group(['middleware'  => 'role:admin', 'prefix' => 'admin' , 'as' => 'admin.'], function(){
          Route::resource(name:'travaux' , controller:\App\Http\Controllers\Admin\UserController::class);
      });

      Route::group(['middleware'  => 'role:client', 'prefix' => 'client' , 'as' => 'clients.'], function(){
          Route::resource(name:'projs' , controller:\App\Http\Controllers\Clients\ProjetController::class);
      });
      
    
      Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
          return view('dashboard');
      })->name('dashboard');
    
     
      Route::resource('user', controller:\App\Http\Controllers\Admin\UserController::class);
        
         Route::resource('chef', controller:\App\Http\Controllers\ChefProjet\ChefProjetController::class);
        
         
         Route::resource('clients', controller:\App\Http\Controllers\Clients\ProjetController::class);
         });
         Route::get('/', function () {
            return redirect()->route('welcome', app()->getLocale());
            
        })->name('welcome');
        Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
        
      Route::get('/', function () {
        return view('welcome');
    });