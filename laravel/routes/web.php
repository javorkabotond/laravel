<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return "Hello! You!";
//});
//
//Route::get('/contact', function () {
//    return "Hi I am contact!";
//});
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//   return "This is post number ". $id . " ". $name;
//});
//
//Route::get("admin/posts/example", array("as" =>"admin.home",function () {
//    $url = route('admin.home');
//
//    return "This url is ". $url;
//}));

//Route::get('/post/{id}', [PostController::class, 'index']);
//
//Route::get('/contact', [PostController::class, 'contact']);
//
//Route::get('/post/{id}', [PostController::class, 'show_post']);

Route::get('/insert', function (){
   DB::insert('insert into posts(title,content) values(?,?)', ['PHP with Laravel', 'Laravel is the best thing that has happend to PHP']);
});

Route::get('/read', function (){
    $result = DB::select('select * from posts where id = ?', [1]);

    foreach ($result as $post) {
        return $post->title;
    }
});


Route::get('/update', function (){
    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

    return $updated;
});

Route::get('/delete', function (){
    $updated = DB::update('delete from posts where id = ?', [1]);

    return $updated;
});
