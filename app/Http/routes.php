<?php

/*Route::get('/', function () {
    return view('welcome');
});*/
//// 认证路由...
//Route::get('auth/login', 'Admin\UsersController@getLogin');
//Route::post('auth/login', 'Admin\UsersController@postLogin');
//Route::get('auth/logout', 'Admin\UsersController@getLogout');
//Route::get('auth/dashboard','Admin\UsersController@getDashboard');
//// 注册路由...
//Route::get('/dream', 'Admin\UsersController@getRegister');
//Route::post('auth/register', 'Admin\UsersController@postRegister');
//Route::controller('auth','Admin\UsersController');


// 认证路由...
Route::get('auth/login', 'Admin\UsersController@getLogin');
Route::post('auth/login', 'Admin\UsersController@postLogin');
Route::get('auth/logout', 'Admin\UsersController@getLogout');
// 注册路由...
Route::get('/dream', 'Admin\UsersController@getRegister');
Route::post('auth/register', 'Admin\UsersController@postRegister');
Route::get('auth/message', 'Admin\UsersController@Message');



Route::get('/dream/index', function(){
    return view("dream.index");
});
Route::get('/dream/home', function(){
    return view("dream.master");
});
Route::get('/dream/message', function(){
    return view("dream.admin.user_message");
});

Route::get('/dream/setting1','Person\Setting1Controller@index');
Route::get('/dream/setting1/edit/{id?}','Person\Setting1Controller@edit');
Route::get('/dream/setting1/save/{id?}','Person\Setting1Controller@save');
Route::get('/dream/setting1/show/{id}','Person\Setting1Controller@show');


Route::get('/dream/setting','Person\SettingController@index');
Route::get('/dream/setting/edit/{id?}','Person\SettingController@edit');
Route::get('/dream/setting/save/{id?}','Person\SettingController@save');
Route::get('/dream/setting/show/{id}','Person\SettingController@show');
Route::get('/dream/setting/delete/{id?}','Person\SettingController@delete');
Route::get('/dream/setting/bcheck','Person\SettingController@bcheck');
Route::get('/dream/setting/check','Person\SettingController@check');
Route::get('/dream/setting/excel','Person\SettingController@excel');

Route::get('/dream/file','Person\FileController@index');
Route::get('/dream/file/edit/{id?}','Person\FileController@edit');
Route::get('/dream/file/save/{id?}','Person\FileController@save');
Route::get('/dream/file/show/{id}','Person\FileController@show');
Route::get('/dream/file/delete/{id?}','Person\FileController@delete');
Route::get('/dream/file/bcheck','Person\FileController@bcheck');
Route::get('/dream/file/check','Person\FileController@check');
Route::get('/dream/file/excel','Person\FileController@excel');

Route::get('/dream/category','Person\CategoryController@index');
Route::get('/dream/category/edit/{id?}','Person\CategoryController@edit');
Route::get('/dream/category/save/{id?}','Person\CategoryController@save');
Route::get('/dream/category/show/{id}','Person\CategoryController@show');
Route::get('/dream/category/delete/{id?}','Person\CategoryController@delete');
Route::get('/dream/category/excel','Person\CategoryController@excel');

Route::get('/dream/title','Person\TitleController@index');
Route::get('/dream/title/edit/{id?}','Person\TitleController@edit');
Route::get('/dream/title/save/{id?}','Person\TitleController@save');
Route::get('/dream/title/show/{id}','Person\TitleController@show');
Route::get('/dream/title/delete/{id?}','Person\TitleController@delete');
Route::get('/dream/title/excel','Person\TitleController@excel');

Route::get('/dream/property','Person\PropertyController@index');
Route::get('/dream/property/edit/{id?}','Person\PropertyController@edit');
Route::get('/dream/property/save/{id?}','Person\PropertyController@save');
Route::get('/dream/property/show/{id}','Person\PropertyController@show');
Route::get('/dream/property/delete/{id?}','Person\PropertyController@delete');
Route::get('/dream/property/excel','Person\PropertyController@excel');


Route::get('/dream/setup','Stock\SetupController@index');
Route::get('/dream/setup/edit/{id?}','Stock\SetupController@edit');
Route::get('/dream/setup/save/{id?}','Stock\SetupController@save');
Route::get('/dream/setup/show/{id}','Stock\SetupController@show');
Route::get('/dream/setup/delete/{id?}','Stock\SetupController@delete');
Route::get('/dream/setup/excel','Stock\SetupController@excel');

Route::get('/dream/conversion','Stock\ConversionController@index');
Route::get('/dream/conversion/edit/{id?}','Stock\ConversionController@edit');
Route::get('/dream/conversion/save/{id?}','Stock\ConversionController@save');
Route::get('/dream/conversion/show/{id}','Stock\ConversionController@show');
Route::get('/dream/conversion/delete/{id?}','Stock\ConversionController@delete');
Route::get('/dream/conversion/excel','Stock\ConversionController@excel');

Route::get('/dream/inventory','Stock\InventoryController@index');
Route::get('/dream/inventory/edit/{id?}','Stock\InventoryController@edit');
Route::get('/dream/inventory/save/{id?}','Stock\InventoryController@save');
Route::get('/dream/inventory/show/{id}','Stock\InventoryController@show');
Route::get('/dream/inventory/delete/{id?}','Stock\InventoryController@delete');
Route::get('/dream/inventory/excel','Stock\InventoryController@excel');


Route::get('/dream/contact','Company\ContactController@index');
Route::get('/dream/contact/edit/{id?}','Company\ContactController@edit');
Route::get('/dream/contact/save/{id?}','Company\ContactController@save');
Route::get('/dream/contact/show/{id}','Company\ContactController@show');
Route::get('/dream/contact/delete/{id?}','Company\ContactController@delete');
Route::get('/dream/contact/bcheck','Company\ContactController@bcheck');
Route::get('/dream/contact/check','Company\ContactController@check');
Route::get('/dream/contact/excel','Company\ContactController@excel');

Route::get('/dream/classify','Company\ClassifyController@index');
Route::get('/dream/classify/edit/{id?}','Company\ClassifyController@edit');
Route::get('/dream/classify/save/{id?}','Company\ClassifyController@save');
Route::get('/dream/classify/show/{id}','Company\ClassifyController@show');
Route::get('/dream/classify/delete/{id?}','Company\ClassifyController@delete');
Route::get('/dream/classify/excel','Company\ClassifyController@excel');

Route::get('/dream/locale','Company\LocaleController@index');
Route::get('/dream/locale/edit/{id?}','Company\LocaleController@edit');
Route::get('/dream/locale/save/{id?}','Company\LocaleController@save');
Route::get('/dream/locale/show/{id}','Company\LocaleController@show');
Route::get('/dream/locale/delete/{id?}','Company\LocaleController@delete');
Route::get('/dream/locale/excel','Company\LocaleController@excel');

Route::get('/dream/shipping','Other\ShippingController@index');
Route::get('/dream/shipping/edit/{id?}','Other\ShippingController@edit');
Route::get('/dream/shipping/save/{id?}','Other\ShippingController@save');
Route::get('/dream/shipping/show/{id}','Other\ShippingController@show');
Route::get('/dream/shipping/delete/{id?}','Other\ShippingController@delete');
Route::get('/dream/shipping/excel','Other\ShippingController@excel');

Route::get('/dream/vocabulary','Other\VocabularyController@index');
Route::get('/dream/vocabulary/edit/{id?}','Other\VocabularyController@edit');
Route::get('/dream/vocabulary/save/{id?}','Other\VocabularyController@save');
Route::get('/dream/vocabulary/show/{id}','Other\VocabularyController@show');
Route::get('/dream/vocabulary/delete/{id?}','Other\VocabularyController@delete');
Route::get('/dream/vocabulary/excel','Other\VocabularyController@excel');


Route::get('/dream/type','Purchase\TypeController@index');
Route::get('/dream/type/edit/{id?}','Purchase\TypeController@edit');
Route::get('/dream/type/save/{id?}','Purchase\TypeController@save');
Route::get('/dream/type/show/{id}','Purchase\TypeController@show');
Route::get('/dream/type/delete/{id?}','Purchase\TypeController@delete');
Route::get('/dream/type/excel','Purchase\TypeController@excel');

Route::get('/dream/basket','Purchase\BasketController@index');
Route::get('/dream/basket/edit/{id?}','Purchase\BasketController@edit');
Route::get('/dream/basket/save/{id?}','Purchase\BasketController@save');
Route::get('/dream/basket/show/{id}','Purchase\BasketController@show');
Route::get('/dream/basket/delete/{id?}','Purchase\BasketController@delete');
Route::get('/dream/basket/bcheck','Purchase\BasketController@bcheck');
Route::get('/dream/basket/check','Purchase\BasketController@check');
Route::get('/dream/basket/excel','Purchase\BasketController@excel');


Route::get('/dream/stype','Sales\StypeController@index');
Route::get('/dream/stype/edit/{id?}','Sales\StypeController@edit');
Route::get('/dream/stype/save/{id?}','Sales\StypeController@save');
Route::get('/dream/stype/show/{id}','Sales\StypeController@show');
Route::get('/dream/stype/delete/{id?}','Sales\StypeController@delete');
Route::get('/dream/stype/excel','Sales\StypeController@excel');

Route::get('/dream/sorder','Sales\SorderController@index');
Route::get('/dream/sorder/edit/{id?}','Sales\SorderController@edit');
Route::get('/dream/sorder/save/{id?}','Sales\SorderController@save');
Route::get('/dream/sorder/show/{id}','Sales\SorderController@show');
Route::get('/dream/sorder/delete/{id?}','Sales\SorderController@delete');
Route::get('/dream/sorder/bcheck','Sales\SorderController@bcheck');
Route::get('/dream/sorder/check','Sales\SorderController@check');
Route::get('/dream/sorder/excel','Sales\SorderController@excel');
