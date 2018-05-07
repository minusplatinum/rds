<?php
/**
 * Navigation Routes
 */
Route::get('/', 'Pages@index')->name('welcome');

Route::get('packages', 'PackageController@index')->name('packages');

Route::get('templates', 'TemplateController@index')->name('index');

Route::get('contact', 'Pages@contact')->name('contact');

Route::post('contact', 'Pages@contactForm')->name('contactForm');
/**
 * Package Routes
 */
Route::get('packages/{package}', 'PackageController@showPackage')->name('showPackage');
/**
 * Template Routes
 */
Route::get('templates/{template}', 'TemplateController@showTemplate')->name('showTemplate');

Route::get('template/{subPages}', 'TemplateController@showTemplateSubPages')->name('showTemplateSubPages');

Route::get('template/creative', 'TemplateController@showTemplateOne')->name('creative');

Route::get('template/agency', 'TemplateController@showTemplateTwo')->name('agency');

Route::get('template/onePageWonder', 'TemplateController@showTemplateThree')->name('onePageWonder');

Route::get('template/cleanBlog', 'TemplateController@showTemplateFour')->name('cleanBlog');

Route::get('template/casualBusiness', 'TemplateController@showTemplateFive')->name('casualBusiness');

Route::get('template/modernBusiness', 'TemplateController@showTemplateSix')->name('modernBusiness');
/**
 * Auth Routes
 */
Auth::routes();

Route::get('customer/select-package', 'HomeController@selectPackage')->name('SelectPackage');

Route::get('customer/select-template', 'HomeController@selectTemplate')->name('SelectTemplate');

Route::get('customer/order-confirm', 'HomeController@orderConfirm')->name('OrderConfirm');

Route::get('customer/customer-payment', 'HomeController@customerPayment')->name('CustomerPayment');

Route::post('customer/customer-payment', 'HomeController@customerPaymentPost')->name('customerPaymentPost');

Route::patch('customer/select-package', 'HomeController@updatePackage')->name('UpdatePackage');

Route::patch('customer/select-template', 'HomeController@updateTemplate')->name('UpdateTemplate');

Route::patch('customer/order-confirm', 'HomeController@updateCustomer')->name('UpdateCustomer');

Route::get('home', 'HomeController@index')->name('home');

Route::patch('home', 'HomeController@updateProfile')->name('updateProfile');


