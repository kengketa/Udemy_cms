<?php
use App\Post;
use App\Flight;

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
//     DB::insert('insert into posts (title,content) values (?, ?)', ['laravel','Laravel is great']);
    
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

// Route::get('/delete', function () {

//    $deleted = DB::delete('delete from posts where id = ?', [2]);
//     return $deleted;
    
// });

/* 
|------------------------------------------------
Application Database Eloquent (ORM)
|------------------------------------------------
*/


// Route::get('/read', function () {

//     $posts = Post::all();
//     //return $posts;
//     foreach ($posts as $key) {

//         return $key->title;
//     }
// });

// Route::get('/find', function () {

//     $post = Post::find(1);
//     return $post->title;
    
// });

// Route::get('/find.2', function () {
//     $posts = Post::where('title','PHP')->orderBy('id','asc')->take(99)->get();
//     return $posts;
//     // foreach ($posts as $key) {
//     //     return $key->title;
//     //     # code...
//     // }
// });


// Route::get('/find.3', function () {
    
//     // $posts=Post::findOrFail(1);
//     // return $posts;
//     $posts = Post::where('id','>',3)->orderBy('id','asc')->take(99)->get();
//     return $posts;

// });


// Route::get('/insertorm', function () {

//     $post = new Post;
//     $post->title = 'New ORM title';
//     $post->content = 'hfdjaskfhjkdshfkldhflhdj';
//     $post->save();
    
// });

// Route::get('/updateorm', function () {

//     $posts = Post::where('title','laravel')->orderBy('id','asc')->take(100)->get();
//     //return $posts;
//     foreach ($posts as $post) {
//         $post->title= 'Updated with ORM';
//         $post->content= 'Updated with ORM jsdfhsdkfhdskhfudfkfghf';
//         $post->save();

//     }
     
// });
//test bulkdel
// Route::get('/bulkdel', function () {

//     $posts = Post::where('id','>',3)->take(100)->get();
//     return $posts;
//     // foreach ($posts as $post) {
       
        
//     // }
// });

// Route::get('/create', function () {

//     Post::create([
//         'title'     => 'the create method',
//         'content'   => 'wow dsjfkdjsflkdjkdfjd'
//     ]);
    
// });

// Route::get('/update', function () {
    
//     $updated = Post::where('id',10)->where('is_admin',0)->update(['title'=>'New PHP Title','content'=>'New content']);
//     return $updated;

// });

// Route::get('delete', function () {

//     $post=Post::find(14);
//     $post->delete();
//     return $post;
  

    
// });

// Route::get('/delete.2', function () {

//     Post::destroy(13);
    
// });

// Route::get('/delete.3', function () {

//     Post::destroy(11,12);
    
// });

// Route::get('/delete.4', function () {

//     //return Post::where('id','>=',7)->take(100)->get();
//     return Post::where('id','>=',7)->delete();
    
// });

// Route::get('/softdelete/{id}', function ($id) {

//     Post::destroy($id);
    
// });
// Route::get('/readsoftdel', function () {

//     // $posts=Post::all();
//     // return $posts;

//     // $posts = Post::withTrashed()->get();
//     // return $posts;

//     $posts = Post::onlyTrashed()->where('id',6)->get();
//     return $posts;
    
// });

// Route::get('/restore_softdel', function () {

//     $post=Post::withTrashed()->where('id',6)->restore();
//     return $post;
    
// });

/////////////force delete/////////////////////

// Route::get('/forcedelete', function () {

//         $post=Post::onlyTrashed()->where('is_admin',0)->forcedelete();
//         return $post; 

    
// });


////////Test by my own //////////////

// Route::get('/insflight', function () {

       
//         $i=0;
//         while ($i <= 100) {
//                 $flight = new Flight;
//                 $flight->name = "Test Flight".$i;
//                 $flight->from = "BKK";
//                 $flight->destination = "MLB";
//                 $flight->save();
//                 $i++;
//                 //return $flight;
//         }

// });


// Route::get('/flight', function () {

//         $flights = Flight::all();
//         return $flights;
    
// });

// Route::get('/flight_get/{id}', function ($id) {

//         $flight = Flight::find($id);
//         return $flight;
    
// });
// Route::get('/flight_where/{from}', function ($from) {

//         $flight = Flight::where('from',$from)->orderBy('id','desc')->take(100)->get();
//         return $flight . '<br>';
    
// });
// Route::get('/update_where/{from}/{newform}', function ($from,$newform) {

//        $flights = Flight::where('from',$from)->orderBy('id','asc')->take(100)->get();
//       foreach ($flights as $flight) {
//              $flight->from = $newform;
//              $flight->save();
//              //return $flight;
//       }
    
// });

// Route::get('flight_del/{id}', function ($id) {

//         $flight = Flight::destroy($id);
//         return $flight;
    
// });

// I have done a great job///


