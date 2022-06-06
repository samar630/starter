<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('Four','Back\NewController@Call');
Route::group(['namespace' => 'Back'] , function (){
   Route::get('Second','NewController@Show') ;
    Route::get('Second1','NewController@ShowController1') ;
    Route::get('Second2','NewController@ShowController2') ;
});
Route::get('login', function (){
    return 'must be login';
})-> name('login');
Route::resource('Three',Controllers\MultiMethodes::class);

Route::get('test',function (){
    return view('layouts/layoutMaster');
});
Route::get('test1',function (){
    return view('layouts/view');
});



Auth::routes(['verify'=>'true']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
