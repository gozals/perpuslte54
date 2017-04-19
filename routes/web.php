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
Route::get('/test', function () {
//    $authors = \App\Models\Author::all();

//    foreach($authors as $author){
//        echo $author->name;
//    }
//    exit;
//    dd($authors->toArray());

//    $author = \App\Models\Author::find(1);
//    $author = \App\Models\Author::where('id', 1)->first();
//    $author = \Illuminate\Support\Facades\DB::table('users')
//                ->where('id', 1)
//                ->first();
////    dd($author->name);
//    dd($author);

//    $author = new \App\Models\Author();
//    $author->name = 'Budi';
//    $author->save();

//    \App\Models\Author::create(['name' => 'BUDI']);

//    $author = \App\Models\Author::firstOrNew(['name'=>'BUDI']);
//    $author->save();

//    $author = \App\Models\Author::find(1);
//    $author->name = 'budi';
//    $author->save();

//    $author = \App\Models\Author::find(6);
//    $author->delete()

//    $authors = \App\Models\Author::with(['books' => function($q){
//        $q->where('amount', '>', 2);
//    }])->get();

//    foreach ($authors as $author){
//        foreach($author->books as $book){
//            echo $book->title.'<br>';
//        };
//    }

//    dd($authors->toArray());

    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/authors', 'AuthorController');