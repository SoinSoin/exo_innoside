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

use App\Customers;
use Illuminate\Support\Facades\Route;

//je crée mes routes en utilisant les differentes methodes URL get/post/put... je lui demande d'aller chercher mon objet customers sur lesquelles j'applique des des methodes qui sont all(), find().... J'ai crééer un controller a ma classe customers qui fait references a un objet customer qui est construit dans mes migrations qui se référe donc a une table (orm)=>mapping objet relationnel mon objet est donc un tableau. C'est cette transformation qui permet de transformer mes réponses en json et le naigateur fait la traduction.
//ici en fonction de mon url (mes routes) je vais avoir accés a differentes méthodes 

Route::get('/', function () {
    return view('customers');
});
Route::get('customers', 'CustomerController@getAllCustomer'); 


// Route::get('customers', function () {
//     return Customers::all();
// });

Route::get('customers/{id}', 'CustomerController@getCustomer');

Route::get('customers/sup/{id}', 'CustomerController@deleteCustomer');
// Route::post('customers', function (Request $request) {
//     return Customers::create($request->all);
// });

// Route::put('customers/{id}', function (Request $request, $id) {
//     $Customer = Customers::findOrFail($id);
//     $Customer->update($request->all());
//     return $Customer;
// });
