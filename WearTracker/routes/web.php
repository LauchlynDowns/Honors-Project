<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\componentController;
use App\Models\Parents;
use App\Models\components;
use App\Models\Log;
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

//sends user to the log in/welcome page
Route::get('/', function () {
    return view('Welcome');
});

//sends user to the dashboard page, where they can view bikes
Route::get('/dashboard', function () {
    return view('dashboard',[
      'parents' => Parents::all()->where('User_id', Auth::user()->id)
    ]);
})->middleware(['auth'])->name('dashboard');

//uses component controller to manage form data on create bike
Route::post('addnewparent', [componentController::class, 'addnewparent'])
->middleware(['auth'])->name('addnewparent');

//manages deletion of bike using deletebike class
Route::post('deletebike', [componentController::class, 'deletebike'])
->middleware(['auth'])->name('deletebike');

//route to view the bike, uses the component controller with the class viewbike
Route::post('view', [componentController::class, 'viewbike'])
->middleware(['auth'])->name('viewbike');


//route to view the new component page, displays error page if bikes are not found.
//also returns bike id's the user owns.
Route::get('/newcomponent', function () {
    if(Parents::all()->where('User_id', Auth::user()->id)->count() == 0){
        return view('bikenotfound');
    } else {
    return view('createcomponent',[ 'parents' => Parents::all()->where('User_id', Auth::user()->id)]);
    }
})->middleware(['auth'])->name('newcomponent');

//route that deals with post request when creating component, 
//uses the component controller with class addpart
Route::post('newcomponent', [componentController::class, 'addpart'])
->middleware(['auth'])->name('addpart');

//routes for add mileage
//displays bike not found page if no bikes are on the account.
Route::get('/addmileage', function () {
    if(Parents::all()->where('User_id', Auth::user()->id)->count() == 0){
        return view('bikenotfound');
    } else {
    return view('addmileage',[ 'parents' => Parents::all()->where('User_id', Auth::user()->id)]);
    }
})->middleware(['auth'])->name('addmileage');

//route to send post requests to the controller using the newlog class
Route::post('newlog',[componentController::class, 'newlog'])
->middleware(['auth'])->name('newlog');

//route to view the logs, takes users to the view logs page
Route::get('/ridelogs', function () {
    return view('ridelogs',[ 'logs' => Log::all()]);
})->middleware(['auth'])->name('ridelogs');



require __DIR__.'/auth.php';

