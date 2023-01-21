<?php

use Illuminate\Support\Facades\Route;
use App\Models\Conference;

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
});


// Route model binding
// Route::get('conferences/{id}', function($id){
//     $conference = Conference::findOrFail($id);

//     return dd($conference);
// });

// Implicit Route Model Binding
Route::get('conferences/{conference}', function(Conference $conference){
    return view('conferences.show')->with('conference', $conference);
});
