<?php

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
    return view('welcome');
})->name('welcome');

// Route::get('/accueil', function () {
//     return view('accueil');
// });

Route::get('/mentions_legales', function(){
    return view('mentions_legales');
});

Route::get('/inscription', function(){
	return view ('Inscription');
});

Route::get('/ConditionsG', function(){
	return view ('ConditionsG');
});

Route::get('/ConditionsV', function(){
	return view('ConditionsV');
});


Route::get('/accueil', 'AccueilController@topvente');

Route::get('/evenementspasses', 'EventController@eventpassed');

Route::get('/evenementscoming', 'EventController@eventcoming')-> name('Evenementscoming');
Route::post('/evenementscoming', 'EventController@eventcoming')-> name('Evenementscoming_post');

Route::get('/boutique', 'BoutiqueController@topvente')->name('Boutique');
Route::post('/boutique-sort', 'BoutiqueController@sort')->name('sort');
Route::post('/boutique-add', 'BoutiqueController@addbasket')->name('addbasket');
Route::post('/boutique-delete', 'BoutiqueController@deletearticle')->name('deletearticle');
Route::post('/boutique-category', 'BoutiqueController@addcategory')->name('addcategory');
Route::post('/boutique-create', 'BoutiqueController@createarticle')->name('createarticle');

Route::get('/panier', 'PanierController@MonPanier')->name('panier');
Route::post('/panier-commander', 'PanierController@commander')->name('commander');
Route::post('/panier-delete', 'PanierController@deletebasket')->name('deletebasket');


Route::get('/boite-a-idees', function () {
    return view('idee');
})->name("idee");


Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/Guest', 'connexioncontroller@guest');

Route::post('Inscription','connexioncontroller@register')-> name('Inscription');

Route::post('Connexion','connexioncontroller@login')-> name('Connexion');

Route::get('Deconnexion', 'connexioncontroller@deconnexion')-> name('Deconnexion');
