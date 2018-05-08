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

Route::get('customer/select-template', 'HomeController@selectTemplate')->name('SelectTemplate');

Route::get('customer/order-confirm', 'HomeController@orderConfirm')->name('OrderConfirm');

Route::get('customer/customer-payment', 'HomeController@customerPayment')->name('CustomerPayment');

Route::post('customer/customer-payment', 'HomeController@customerPaymentPost')->name('customerPaymentPost');

Route::patch('customer/select-template', 'HomeController@updateTemplate')->name('UpdateTemplate');

Route::patch('customer/order-confirm', 'HomeController@updateCustomer')->name('UpdateCustomer');

Route::get('dashboard', 'HomeController@index')->name('dashboard');

Route::get('dashboard/edit-profile', 'HomeController@editProfile')->name('EditProfile');

Route::get('dashboard/my-packages', 'HomeController@myPackages')->name('MyPackages');

Route::get('dashboard/purchase-history', 'HomeController@purchaseHistory')->name('PurchaseHistory');

Route::patch('dashboard', 'HomeController@updateProfile')->name('updateProfile');


