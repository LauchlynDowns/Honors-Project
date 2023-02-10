<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\componentController;
use App\Models\Parents;
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
    return view('Welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        'parents' => Parents::all()->where('User_id', Auth::user()->id)
    ]);
    
})->middleware(['auth'])->name('dashboard');


Route::get('/welcome', function () {
    return view('Welcome');
})->middleware(['auth'])->name('welcome');

Route::post('addnewparent', [componentController::class, 'addnewparent'])
->middleware(['auth'])->name('addnewparent');

Route::post('deletebike', [componentController::class, 'deletebike'])
->middleware(['auth'])->name('deletebike');

Route::post('view', [componentController::class, 'viewbike'])
->middleware(['auth'])->name('deletebike');




//routes for file handling
Route::resource('photos', FileDownloadController::class);



require __DIR__.'/auth.php';

