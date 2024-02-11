<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All projects
Route::get('/', [ProjectController::class, 'index'])->name('home')->middleware('auth');

// Show Create Project form
Route::get('/projects/create', [ProjectController::class, 'create']);

// Single Project
Route::get('/project/{project}', []);




// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// show register user form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);


// TESTING
Route::get('/jsondata', function(){
    $data = array(
        'message' => 'No new orders!'
    );
    
    return response()->json($data);
});

// Route::get('/budgets/{id}', function($id){
//     return response('budget id = ' . $id);
// })->where('id', '[0-9]+');