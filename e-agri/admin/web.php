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
Route::get('/login',[
    'uses' =>'homeController@login',
    'as' =>'login'
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