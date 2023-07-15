<?php


use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

include __DIR__ . '/admin.php';

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');


Route::match(["POST", "GET", "PUT"], '/test', function(Request $request) {
    return (int) $request->isMethod('GET');
});


Route::get('/collections', function () {
    $collection = collect([1,2,3,4,5,77,8,9,34,86,64]);
    dd($collection->toJson());
});


Route::get('/sessions', function () {
    if (session()->has('mysession')) {
        dd(session()->all(), session()->get('mysession'));
        session()->forget('mysession');
    }
    // session()->put('mysession', 'Test Session');

});


