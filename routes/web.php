<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

/*
|--------------------------------------------------------------------------
| Common Resource Routes
|--------------------------------------------------------------------------
| index - show all listings
| show - show single listing
| create - show form to create new listing
| store - store new listing
| edit - show form to edit listing
| update - update listing
| destroy - delete listing
|
*/

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


