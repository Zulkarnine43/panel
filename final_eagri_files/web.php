<?php


Route::get('/admin/login',[
    'uses' =>'adminController@a_login',
    'as' =>'a_login'
]);


Route::get('/admin/home',[
    'uses' =>'adminController@a_home',
    'as' =>'a_home'
]);
Route::get('/farmers/',[
    'uses' =>'adminController@all_farmer',
    'as' =>'all_farmer'
]);

Route::get('/customers/',[
    'uses' =>'adminController@all_customer',
    'as' =>'all_customer'
]);

Route::get('/verified/crop',[
    'uses' =>'adminController@verified_crops',
    'as' =>'verified_crops'
]);

Route::get('/Unverified/crop',[
    'uses' =>'adminController@Unverified_crops',
    'as' =>'Unverified_crops'
]);

Route::get('/add/news',[
    'uses' =>'adminController@add_news',
    'as' =>'add_news'
]);

Route::get('/manage/news',[
    'uses' =>'adminController@manage_news',
    'as' =>'manage_news'
]);

Route::get('/manage/comments',[
    'uses' =>'adminController@manage_Comments',
    'as' =>'manage_Comments'
]);

//Home section start

Route::get('/',[
    'uses' =>'homeController@index',
    'as' =>'index'
]);

Route::get('/contact',[
    'uses' =>'homeController@contact',
    'as' =>'contact'
]);

Route::get('/services',[
    'uses' =>'homeController@services',
    'as' =>'services'
]);

Route::get('/about',[
    'uses' =>'homeController@about',
    'as' =>'about'
]);

Route::get('/signup',[
    'uses' =>'homeController@signup',
    'as' =>'signup'
]);

Route::post('signup/save',[
    'uses' =>'RegisterLoginCheckController@registerSave',
    'as' =>'registerSave'
]);


Route::get('/login',[
    'uses' =>'homeController@login',
    'as' =>'login'
]);

Route::post('login/check',[
    'uses' =>'RegisterLoginCheckController@login_check',
    'as' =>'login_check'
]);

Route::get('/account_verify/{username}/{uses_as}',[
    'uses' =>'RegisterLoginCheckController@account_verify',
    'as' =>'account_verify'
]);

Route::post('/pw_change_link',[
    'uses' =>'RegisterLoginCheckController@pw_change_link',
    'as' =>'pw_change_link'
]);

Route::get('/pw_change/{uses}/{email}',[
    'uses' =>'RegisterLoginCheckController@pw_change',
    'as' =>'pw_change'
]);


Route::post('/pass_change_save/{uses_as}/{email}',[
    'uses' =>'RegisterLoginCheckController@pass_change_save',
    'as' =>'pass_change_save'
]);


Route::get('/crop_details',[
    'uses' =>'homeController@crop_details',
    'as' =>'crop_details'
]);



Route::get('/cust/message',[
    'uses' =>'homeController@c_message',
    'as' =>'c_message'
]);

Route::get('/logout',[
    'uses' =>'homeController@logout',
    'as' =>'logout'
]);



Route::get('/farmer/home',[
    'uses' =>'farmerController@f_home',
    'as' =>'f_home'
]);

Route::get('/crop/import',[
    'uses' =>'farmerController@crop_import',
    'as' =>'crop_import'
]);

Route::get('/crop/manage',[
    'uses' =>'farmerController@crop_manage',
    'as' =>'crop_manage'
]);

Route::get('/user/manage',[
    'uses' =>'farmerController@user_manage',
    'as' =>'user_manage'
]);
Route::get('/farmer/profile',[
    'uses' =>'farmerController@f_profile',
    'as' =>'f_profile'
]);