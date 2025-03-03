<?php

use App\Models\Insert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('choose');
});

// choose library location
Route::get('/pslrc', function () {
    return view('statistic_date_pslrc');
})->name('preschool');

Route::get('/gslrc', function () {
    return view('statistic_date_gslrc');
})->name('gradeschool');

Route::get('/hslrc', function () {
    return view('statistic_date');
})->name('highschool');

Route::get('/cllrc', function () {
    return view('statistic_date_cllrc');
})->name('college');
// choose library location

//statistics for every library
Route::get('/ps', function (Request $request) {
    $query = Insert::where('loc', 'Preschool Learning Resource Ce'); // Filter records where loc = 'library'

    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('date', [$request->start_date, $request->end_date]);
    }

    $values = $query->orderBy('date', 'asc')->orderBy('entry', 'asc')->get();
    $count = $values->count(); // Count the number of records

    return view('statistics', ['values' => $values, 'count' => $count]);
});

Route::get('/gs', function (Request $request) {
    $query = Insert::where('loc', 'Grade School Learning Resource'); // Filter records where loc = 'library'

    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('date', [$request->start_date, $request->end_date]);
    }

    $values = $query->orderBy('date', 'asc')->orderBy('entry', 'asc')->get();
    $count = $values->count(); // Count the number of records

    return view('statistics', ['values' => $values, 'count' => $count]);
});


Route::get('/hs', function (Request $request) {
    $query = Insert::where('loc', 'High School Learning Resource'); // Filter records where loc = 'library'

    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('date', [$request->start_date, $request->end_date]);
    }

    $values = $query->orderBy('date', 'asc')->orderBy('entry', 'asc')->get();
    $count = $values->count(); // Count the number of records

    return view('statistics', ['values' => $values, 'count' => $count]);
});



Route::get('/cl', function (Request $request) {
    $query = Insert::where('loc', 'College Learning Resource Cent'); // Filter records where loc = 'library'

    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('date', [$request->start_date, $request->end_date]);
    }

    $values = $query->orderBy('date', 'asc')->orderBy('entry', 'asc')->get();
    $count = $values->count(); // Count the number of records

    return view('statistics', ['values' => $values, 'count' => $count]);
});





//statistics for every library






Route::get('/register', function () {
    return view('register');
});



Route::post('/register', [UserController:: class,'register']);
Route::post('/login', [UserController:: class,'login']);
Route::post('/logout', [UserController:: class,'logout']);




