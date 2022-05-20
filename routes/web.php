<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdduserController;
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

Route::get('/south-west', function () {
    return view('south-west-view');
})->middleware(['auth'])->name('south-west-view-dashboard');

Route::get('/north-central', function () {
    return view('north-central-view');
})->middleware(['auth'])->name('north-central-view-dashboard');

Route::get('/north-east', function () {
    return view('north-east-view');
})->middleware(['auth'])->name('north-east-view-dashboard');

Route::get('/north-west', function () {
    return view('north-west-view');
})->middleware(['auth'])->name('north-west-view-dashboard');

Route::get('/south-east', function () {
    return view('south-east-view');
})->middleware(['auth'])->name('south-east-view-dashboard');

Route::get('/south-south', function () {
    return view('south-south-view');
})->middleware(['auth'])->name('south-south-view-dashboard');




Route::get('/add-user', function () {
    return view('add-user-view');
})->middleware(['auth'])->name('add-user-view-dashboard');


Route::get('/add-project', function () {
    return view('add-project-view');
})->middleware(['auth'])->name('add-project-view-dashboard');

Route::get('/add-report', function () {
    return view('add-report-view');
})->middleware(['auth'])->name('add-report-view-dashboard');

Route::get('/view-report', function () {
    return view('view-report-view');
})->middleware(['auth'])->name('view-report-view-dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::post('addnewuser',[AdduserController::class, 'storenewuser']);



require __DIR__.'/auth.php';
