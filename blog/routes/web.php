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