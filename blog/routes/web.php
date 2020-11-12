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

Route::get('/about', function() {
  	return view('about');
});
// get the parameter of name
Route::get('students/{name}', function($name) {
        echo 'Students Name is ' . $name;
}); 


Route::get('/getData', function() {
   $fetchData = DB::select('select * from users');

   echo "<pre>";
   print_r($fetchData);
});

Route::get('/foo', function() {
    
		echo '<form method="post" action="foo">';
		echo 'Enter Name : <input type="name" name="name"> <br>' ;
		echo '<input type="submit" name="submit" value="submit">';
		echo csrf_field();
		echo '</form>';

});

Route::post('/foo', function() {
    echo 'Your message is submitted by Post Method';
});

// Route::get('students/{name}/{age}',function($name)
// {
//     echo "Student name is ".$name .$age ;
// });

Route::get('students/{name?}',function($name="Shohrab Hossain")
{
    echo "Student name is ". $name;
});

Route::get('/getall', function()
{
$fetchData = DB::select('select * from users');
echo "<pre>";
print_r($fetchData);
echo "</pre>";


foreach($fetchData as $fetch)
{
   echo "<brphp artisan make:controller homeController>";
    echo $fetch->name;
}

});


Route::get('/home/{name?}/{age?}',"homeController@index");


Route::get("/getUrlData","homeController@getData");


Route::get("/hello",function(){

    $students = array(

        "name" => "Shohrab Hossain",
        "age" => "26"

    );

    return view("hello",$students);
});


Route::get("showage",
  [
    "uses"=>"showAge@index",
    "middleware"=>"CheckAge"
  ]);

Route::get("/alloweduser",[
    "uses" =>"showUser@userRestrict",
    "middleware"=>"userRestrict"
]);

Route::get('/', function () {
    return view('mypages.home');
    });
    Route::get('/about', function () {
    return view('mypages.about');
    });
    Route::get('/contact', function () {
    return view('pages.contact');
    });


Route::get('/getrquest/{name}/{age}','requestController@getrequest');
Route::get('/info/{name}/{age}','requestController@info');

// Form Data Route

Route::get('/form','requestController@form');
Route::post('/process','requestController@process');
// Route::get('/getquery','requestController@getquery');
Route::get('/getquery','requestController@getquery2');


Route::get('/entry','requestController@studentForm');

Route::post('/insert','requestController@insert');

Route::post('/view','requestController@view');
