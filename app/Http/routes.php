<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>this is my web！！</h1>';
});
Route::get('/hi/{name}',function($name){
   return  "my name is {$name}";
});
Route::get('/hi/{age?}',function($age="20"){
    $test='<h1 style=" color:red">web web</h1>';
    $id='<p style="color:blue; align:center; font size:15px">this is a web</p>';
    return view('test',["age"=>$age,"test"=>$test,"id"=>$id]);
});


/*Route::post('/foo/bar','ProductController@store');*/

Route::get('/foo/bar','ProductController@store');



/*Route::any('foo/bar', function()
{
    return 'Hello World';
});
$url = url('foo/bar');*/



Route::get('user/{name}', function($name)
{
    return "my name is $name";
})
    ->where('name', '[A-Za-z]+');

Route::get('user/{id}', function($id)
{
   return "My ID is $id";
})
    ->where('id', '[0-9]+');
//输入字母显示$name，出入数字显示$id
//使用正则表达式限制参数


Route::get('use/{id}/{name}', function($id, $name)
{
    return "my name is $name, ID is $id";
})
    ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//使用条件限制数组


Route::get('us/{id}', function($id)
{
    //全局配置模式
    //RouteServiceProvider 的 boot 方法里定义模式
     return "只有 {$id} 是数字才被调用。";
});



Route::get('/test','productController@main');
Route::get('/new','productController@newpage');




/*Route::get('/product/{id}','productController@edit');
Route::get('/product/save','productController@save');
Route::get('/main','productController@main');
Route::get('/product/list','productController@productList');*/

Route::get('/products','ProductController@index');
Route::get('/product/show/{id}','productController@show');
Route::get('/product/edit/{id?}','productController@edit');
Route::get('/product/save/{id?}','productController@save');
Route::get('/product/delete/{id?}','productController@delete');

Route::get("/product/send",'productController@testsend');
Route::get("/product/receive",'productController@testreceive');

Route::get("/about",'PageController@about');

//http://localhost/age?age=24
Route::get("/age",['middleware' => 'age','AgeController@age']);





Route::get('/blog','BlogController@index');
Route::get('login', ['middleware' => 'login', 'as' => 'login', 'uses' => 'loginController@loginGet']);
Route::post('login', ['middleware' => 'login', 'uses' => 'loginController@loginPost']);
Route::get('logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

Route::get('stu/home', ['as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', ['as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', ['as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);
