<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\componentController;
use App\Models\Parents;
use App\Models\components;
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
->middleware(['auth'])->name('viewbike');

Route::get('/createcomponent', function () {
    return view('createcomponent',[ 'parents' => Parents::all()->where('User_id', Auth::user()->id)]);
})->middleware(['auth'])->name('createcomponentpage');

Route::get('/newcomponent', function () {
    return view('createcomponent',[ 'parents' => Parents::all()->where('User_id', Auth::user()->id)]);
})->middleware(['auth'])->name('newcomponent');

Route::post('newcomponent', [componentController::class, 'addpart'])
->middleware(['auth'])->name('addpart');

//routes for add mileage
Route::get('/addmileage', function () {
    return view('addmileage',[ 'parents' => Parents::all()->where('User_id', Auth::user()->id)]);
})->middleware(['auth'])->name('addmileage');

Route::post('newlog',[componentController::class, 'newlog'])
->middleware(['auth'])->name('newlog');



//routes for file handling
Route::resource('photos', FileDownloadController::class);

// Route::post('/addpart', [componentController::class, 'addpart'])
// ->middleware(['auth'])->name('addpart');

require __DIR__.'/auth.php';

