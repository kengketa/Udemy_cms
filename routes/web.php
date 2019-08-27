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
//     return view('welcome');
//     //  return "Hello world";
// });

// Route::get('/about', function () {
//     //return view('welcome');
//       return "Hi About";
// });

// Route::get('/contact', function () {
//     //return view('welcome');
//       return "Hi Contact";
// });

// Route::get('/post/{id}/{name}',function($id, $name){
//     return 'this is post number'. $id .'and the name is'. $name;
// });

// //nick name URL
// Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//     $url = route('admin.home');
//     return 'this url is:' . $url;

// }));


// Route::group(['middleware' => ['web']], function () {
//     //return view('welcome');
//     //echo "sdfdsdfdsfd";
//     //return "test";
// });

//Route::get('post/{id}','PostsController@index');

//Route::resource('posts','PostsController');

// Route::get('/contact','PostsController@contact');
// Route::get('post/{id}/{name}/{password}','PostsController@show_post');
//Route::get('post','PostsController@show_post');

/* 
|------------------------------------------------
Application Database Raw SQL quries
|------------------------------------------------
*/

// Route::get('/insert', function () {
//     DB::insert('insert into posts (title,content) values (?, ?)', ['PHP with Laravel','Laravel is great']);
    
// });

// Route::get('/read', function () {

//    $results = DB::select('select * from posts where id = ?', [1]);

// //    foreach ($results as $post) {
// //       return $post->title;
// //    }

// //return $results;
// return var_dump($results);
// });

// Route::get('update', function () {
//     $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//     return $updated;
// });

Route::get('/delete', function () {

   $deleted = DB::delete('delete from posts where id = ?', [2]);
    return $deleted;
    
});