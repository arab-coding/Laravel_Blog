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



Route::get('/', function () {
        return view('welcome');
    });
//Route::get('/title', function () {
//    return view('title');
//});
//
//Route::get('/ali', function () {
//    return view('ali');
//});
//
//    Route::get('/book',function(){
//        return "welcome";
//    });
//
//    Route::get('/post/{id}',function($id){
//        return "post num " . $id;
//    });
    // Route::get($uri, $callback);
    // Route::post($uri, $callback);
    // Route::put($uri, $callback);
    // Route::patch($uri, $callback);
    // Route::delete($uri, $callback);
    // Route::options($uri, $callback);

//    Route::get('/post','Posts@index');
//
//    Route::get('/post/{id}','Posts@index');


//    Route::resource('post','Posts');
//    Route::get('post/{id}/{name}','posts@post');
//
//    Route::get('/category','Posts@category');

//
//    Route::get('/insert',function (){
//
//        DB:: insert('insert into posts(title,body) values (?,?)',['عنوان المقال الأول','محتوى المقال الأول ']);
//    });


//    Route::get('/read',function (){
//      $result = DB::select('select * from posts where id = ?') ;
////
////      foreach ($result as $body){
////          return $body->body;
////      }
//       return $result;
//    });


//Route::get('/update',function (){
//   DB:: update('update posts set title = "تحديث المقال ٢" where id =?',[2]);
//
//});

Route::get('/delete/{id}',function ($id){
 $delete =  DB::delete('delete from posts where id = ?',[$id]);
    return $delete;
});