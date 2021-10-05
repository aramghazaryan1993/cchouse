<?php

Route::get('/home', function () {
     return redirect('admin');
});



Auth::routes();


Route::get('','HomeController@index')->name('home view');
Route::get('Компания','CompanyController@index')->name('company view');
Route::get('Ремонт-квартир-под-ключ','UslugiRemontController@index')->name('uslugi remont view');
Route::get('Услуги-дизайнера','UslugiDizaynerController@index')->name('uslugi dizayner view');
Route::get('Доставка-материалов','UslugiDastavkaController@index')->name('uslugi dastavka view');
Route::get('Портфолио','PortfolyoController@index')->name('portfolyo view');
Route::get('Портфолио-фотогалерея/{id}','PortfolyoController@photogallery')->name('portfolyo photogallery view');
Route::get('Прайс-Лист','PriceListController@index')->name('price list view');
Route::get('Акции','ActionController@index')->name('action view');
Route::get('Отзывы','OtzivController@index')->name('otziv view');
Route::post('введите','OtzivController@InsertOtziv')->name('otziv insert view');
Route::get('Контакты','ContactController@index')->name('contact view');
Route::get('Обработку-персональных-данных','ContractController@index')->name('contract view');	

                                // Send Email
Route::post('vapros_email', 'EmailController@VaprosEmail')->name('send vapros email');
Route::post('zayavku_email', 'EmailController@ZayavkuEmail')->name('send zayavku email');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::group( ['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Admin'], function(){
	
  Route::get('/','HomeController@index')->name('admin');
  Route::post('edithome1/{id}','HomeController@EditHome1')->name('edit home 1');
  Route::post('edithome2/{id}','HomeController@EditHome2')->name('edit home 2');
  Route::post('edithome3/{id}','HomeController@EditHome3')->name('edit home 3');
  Route::post('edithome4/{id}','HomeController@EditHome4')->name('edit home 4');
  Route::post('edithome5/{id}','HomeController@EditHome5')->name('edit home 5');
  Route::post('edithome6/{id}','HomeController@EditHome6')->name('edit home 6');
  Route::post('edithome7/{id}','HomeController@EditHome7')->name('edit home 7');
  Route::post('социальные сети/{id}','HomeController@SocialNetworks')->name('Social Networks');

  Route::get('company','CompanyController@index')->name('company');
  Route::post('editcompany/{id}','CompanyController@EditCompany')->name('edit company');

  Route::get('portfolyo','PortfolyoController@index')->name('portfolyo');

  Route::post('add_insert','PortfolyoController@insert')->name('insert portfolyo');


  Route::get('portfolyo_view/{id}','PortfolyoController@PortfolyoView')->name('Portfolyo View');
  Route::post('edit_portfolyo','PortfolyoController@EditTitle')->name('Edit title portfolyo');
  Route::post('add_portfolyo_image','PortfolyoController@addImage')->name('Add image');
  Route::post('home','PortfolyoController@homeImage')->name('home image');
  Route::get('delete_image/{id}/{urlID}','PortfolyoController@ImageDelete')->name('delete image portfolyo');


  Route::get('delete_portfolyo/{id}','PortfolyoController@DeletePortfolio')->name('delete portfolyo');

  Route::get('uslugi_remont','UslugiRemontController@index')->name('uslugi remont');
  Route::get('add_img_uslugi_remont','UslugiRemontController@ShowImg')->name('add img uslugi remont');
  Route::get('delete_img_uslugi_remont/{id}','UslugiRemontController@DeleteImg')->name('delete img uslugi remont');
  Route::post('add_img_uslugi_remont','UslugiRemontController@AddImg')->name('add img uslugi remont');


  Route::post('uslugi_remont1/{id}','UslugiRemontController@EditText1')->name('edit uslugi remont1');
  Route::post('uslugi_remont2/{id}','UslugiRemontController@EditText2')->name('edit uslugi remont2');
  Route::post('uslugi_remont3/{id}','UslugiRemontController@EditText3')->name('edit uslugi remont3');
  Route::post('uslugi_remont4/{id}','UslugiRemontController@EditText4')->name('edit uslugi remont4');
  Route::post('uslugi_remont5/{id}','UslugiRemontController@EditText5')->name('edit uslugi remont5');
  Route::post('uslugi_remont6/{id}','UslugiRemontController@EditText6')->name('edit uslugi remont6');
  


  Route::get('uslugi_dizaynera','UslugiDizaynerController@index')->name('uslugi dizaynera');
  Route::post('edit_uslugi_dizayner1/{id}','UslugiDizaynerController@EditDizayner1')->name('edit uslugi dizayner1');
  Route::post('edit_uslugi_dizayner2/{id}','UslugiDizaynerController@EditDizayner2')->name('edit uslugi dizayner2');
  Route::post('add_img_uslugi_dizayner','UslugiDizaynerController@AddImage')->name('add img uslugi dizayner');
  Route::get('view_img_uslugi_dizayner/{id}','UslugiDizaynerController@ViewImage')->name('view img uslugi dizayner');
  Route::post('edit_img_uslugi_dizayner/{id}','UslugiDizaynerController@EditImage')->name('edit img uslugi dizayner');
  Route::post('add_text_uslugi_dizayner','UslugiDizaynerController@AddText')->name('Add text uslugi dizayner');
  Route::post('edit_text_uslugi_dizayner/{id}/{url}','UslugiDizaynerController@EditText')->name('edit text uslugi dizayner');
  Route::get('delete_text_uslugi_dizayner/{id}/{url}','UslugiDizaynerController@DeleteText')->name('Delete Text uslugi dizayner');
    Route::get('delete_uslugi_dizayner/{id}','UslugiDizaynerController@DeleteDizayner')->name('delete uslugi dizayner');


  Route::get('uslugi_dastavka','UslugiDastavkaController@index')->name('uslugi dastavka');
  Route::post('uslugi_dastavka/{id}','UslugiDastavkaController@InsertDastavka')->name('insert uslugi dastavka');
  //Route::get('uslugi_dastavka/{id}','UslugiDastavkaController@edit')->name('edit uslugi dastavka');

  Route::get('price_list','PriceListController@index')->name('price list');
  Route::post('insert_price_list','PriceListController@insert')->name('insert price list');
  Route::post('edit_price_list/{id}','PriceListController@edit')->name('edit price list');
  Route::get('delete_price_list/{id}','PriceListController@delete')->name('delete price list');

  Route::get('action','ActionController@index')->name('action');
  Route::post('insert_action','ActionController@InsertAction')->name('insert action');
  Route::post('edit_action/{id}','ActionController@EditAction')->name('edit action');
  Route::get('delete_action/{id}','ActionController@DeleteAction')->name('delete action');

  Route::get('otziv','OtzivController@index')->name('otziv');
  Route::post('edit_otziv/{id}','OtzivController@EditOtziv')->name('edit otziv');
  Route::get('delete_otziv/{id}','OtzivController@DeleteOtzivList')->name('delete otziv');

  Route::get('contact','ContactController@index')->name('contact');
  Route::post('edit_contact/{id}','ContactController@EditContact')->name('edit contact');


  Route::get('vapros','VaprosController@index')->name('vapros');
  Route::post('edit_vapros/{id}','VaprosController@EditVapros')->name('edit vapros');

  Route::get('contract','ContractController@index')->name('contract');
  Route::post('edit_contract/{id}','ContractController@EditContract')->name('edit contract');
  
                                                // Show  User
  Route::get('show_user','UserController@index')->name('show user');
  Route::post('edit_user/{id}','UserController@EditUser')->name('edit user');
  Route::get('delete_user/{id}','UserController@DeleteUser')->name('user delete');
});





