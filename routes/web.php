<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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

Route::get('/',[JobController::class, 'index']);
Route::get('/jobs/create',[JobController::class, 'create']);


Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/job/{id}', function ($id) {
    return view('job', ['id' => $id]);
});
