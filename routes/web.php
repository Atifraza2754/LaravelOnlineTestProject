<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::get('/post',function() {  // /psot is route name and in return post is view name
    return view('post');
 
//2nd Way
//return "<h1>Post Page</h1>"; //2nd method to use route we can directly place html here in return
}); */

//THIRD way
/* 
Route::view('/post','post'); //view is method in bracket first is route name 2nd post is view name
 */

 //sub route
/*   Route::get('/post', function () {
    return view('post');
}); */

/*
Route::get('/post/firstpost', function () {
    return view('first_post');
});
 */ 

 //how to take one Route Parameter
/*  Route::get('/post/{id?}', function(string $id=null) { //? is used to tell about route parameter that this parameter is optional
    if($id){
    return "<h1>Post ID " . $id . "</h1>";
    }
    else{
        echo "<h1>ID Not Found</h1>";
    }
});
 */

 //How to take Multiple Route Parameter
 /* Route::get('/post/{id?}/comment/{commentid?}', function(string $id=null , string $comment=null){ 
    //? is used to tell about route parameter that this parameter is optional
    if($id){
    return "<h1>Post ID " . $id . "</h1><h2>2nd parameter id is " . $comment ."</h2>";
    }
    else{
        echo "<h1>ID Not Found</h1>";
    }
});
 */
 
//Just use numbers in route parameter
/*  Route::get('/post/{id}', function(string $id) { 
    if($id){
    return "<h1>Post ID " . $id . "</h1>";
    }
    else{
        echo "<h1>ID Not Found</h1>";
    }
})->where('id','[a-zA-Z]+');

 */
//whereNumber is used for number we can just use number in route parameter not accept character
//whereAlpha it is just use for alpha characters in route parameter not accept numbers
//whereAlphaNumeric with this one we can use both numbers and characters also but can not use special character
//whereIn('id',['song','movie','atif']) with this only predefined names in rout parameter can be used other will not accept route
//where('id','[0-9]+') with this one we can use those number or character which we set format in regular expression



//How to take Multiple Route Parameter with using multiple constraints
/*   Route::get('/post/{id?}/comment/{commentid?}', function(string $id=null , string $comment=null){ 
    if($id){
    return "<h1>Post ID " . $id . "</h1><h2>2nd parameter id is " . $comment ."</h2>";
    }
    else{
        echo "<h1>ID Not Found</h1>";
    }
})->where('id','[0-9]+')->whereAlpha('commentid');

 */
//->where('id','[0-9]+')->whereAlpha('commentid') this two constraints we used for two route parameters 


// Named Routes
/* 
Route::get('/', function () {
    return view('welcome');
})->name('home'); //this is named routes which use for multiple pages because of this 
                 //now we can change above route names that will not effect on our route name

Route::get('/newpost', function(){  //here we changed the route name but it is working correctly because we set up named routes
    return view('post');
})->name('mypost');

Route::get('/aboutus', function(){
    return view('about');
})->name('about_us');
 */

Route::get('/',[TestController::class,'login'])->name('login');
Route::post('/login_process',[TestController::class,'login_process']);

Route::get('/register',[TestController::class,'register'])->name('register');
Route::post('/register_student',[TestController::class,'register_student']);

Route::get('/Start',[TestController::class,'start'])->name('Start');

Route::post('/test',[TestController::class,'test']);

Route::get('/download',[TestController::class,'download']);


?>