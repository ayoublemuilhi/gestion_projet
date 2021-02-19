<?php
/*tache :
 * 1- delete et status active et bloque
 * 3 - add archive
 * 4 - add user with image
 * 5-  verifier email with ajax in add  user
 */
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

Route::group(['namespace' => 'Admin'],function (){
####################    Login Admin
    Route::get('/',                              ['as' => 'login.view',             'uses' => 'LoginController@getLogin']);

    Route::post('/login',                        ['as' => 'admin.login',            'uses' => 'LoginController@StoreLogin']);

####################    middelware avant dashboard


Route::group(['middleware' => 'auth'],function (){
    Route::get('/dashboard',                    ['as' => 'dashboard',             'uses' => 'DashboardController@dashboard']);
##################### Secteurs #####################
    Route::get('/secteurs',                      ['as' => 'secteurs',             'uses' => 'SecteurController@secteurs']);
    Route::get('/secteur/create/',          ['as' => 'secteurs.create',      'uses' => 'SecteurController@secteurCreate']);
##################### Objectifs #####################
    Route::get('/objectifs',                      ['as' => 'objectifs',             'uses' => 'ObjectifController@objectifs']);
    Route::get('/objectif/create/',          ['as' => 'objectifs.create',      'uses' => 'ObjectifController@objectifCreate']);
##################### Indicateurs #####################
    Route::get('/indicateurs',                 ['as' => 'indicateurs',             'uses' => 'IndicateurController@indicateurs']);
    Route::get('/indicateur/create/',          ['as' => 'indicateurs.create',      'uses' => 'IndicateurController@indicateurCreate']);
##################### Unites #####################
    Route::get('/unites',                 ['as' => 'unites',             'uses' => 'UniteController@unites']);
    Route::get('/unite/create/',          ['as' => 'unites.create',      'uses' => 'UniteController@uniteCreate']);



  });//end middleware

});

