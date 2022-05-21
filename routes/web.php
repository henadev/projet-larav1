<?php

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

// Route::get('/', function () {
//     $data['age']= '33';
//     $data['name']='ben alaya hana';
//     return view('welcome',$data);
// });

// Route::get('/landing', function () {
  
//     return view('landing');
// });

// Route::get('/about', function () {
  
//     return view('about');
// });

Route::get('index', 'Front\UserController@getIndex');
// ******************************************************
// Route::get('/test1', function () {
//     return ('welcome');
// });

// Route::get('/test2/{id}', function ($id) {
//     return  $id;
// });

// Route::get('/test3/{id?}', function () {
//     return  'welcom';
// });

// ******************************************************
// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// })->name('number');

// Route::get('/show-string/{id?}', function () {
//     return ('abcd');
// })->name('string');



// Route::namespace('Front')->group(function(){

//     Route::get('users','UserController@getUsers'); 
      
   
// });

// Route::group(['prefix' => 'users','middleware' => 'auth'],function(){

//     Route::get('/',function(){
//         return 'work';
//     }); 
    
//     Route::get('show','UserController@getUsers');
//     Route::delete('delete','UserController@getUsers');
//     Route::get('edit','UserController@getUsers');
//     Route::put('update','UserController@getUsers');

      
   
// });

// Route::get('login',function(){

//     return 'Must br login To access this Route';
// })->name('login');

// Route::group(['namespace' => 'Admin'],function(){

//      Route::get('second','SecondController@showString0')->middleware('auth');
//      Route::get('second1','SecondController@showString1');
//      Route::get('second2','SecondController@showString2');
//      Route::get('second3','SecondController@showString3');
// });

// Route::Resource('news','NewsController');
// ou manuel
// Route::get('news','NewsController@index');
// Route::get('news/create','NewsController@create');
// Route::get('news/{id}','NewsController@show');
// Route::get('news/{id}','NewsController@update');
// Route::get('news/{id}','NewsController@destroy');
// Route::get('news/{id}/edit','NewsController@edit');

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function(){
    return 'Home';
});


