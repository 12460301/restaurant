<?php

Route::get('/', function () {
	//return view('file.upload');
   //return view('website.insertar_platillo');
	return view('website.index');
});

Route::get('/login', function () {
    return view('website.login');
});
Route::get('/contacto', function () {
    return view('website.contacto');
});
Route::get('/ofertas', function () {
    return view('website.ofertas');
});
Route::get('/paquetes', function () {
    return view('website.paquetes');
});
Route::get('/platillos', function () {
    return view('website.platillos');
});
Route::get('/bebidas', function () {
    return view('website.bebidas');
});
Route::get('/postres', function () {
    return view('website.postres');
});

Route::get('/insertar_usuario', function () {
    return view('website.insertar_usuario');
});

Route::post('/upload', 'PlatillosController@upload');
Route::POST('/form','PlatillosController@store');
//Route::POST('/insertar','PlatillosController@platillo');
Route::post('/log', 'LoginController@store');

Route::post('/mensaje', 'MensajesController@store');

/*
Route::get('/usuario', function(){


    $usuario = \DB::table('usuario')->insert([
        'nombre' => 'Angel Calva',
        'telefono'   => 3121098359,
        'email'  => 'angel@gmail.com',
        'password'=> \Hash::make('12345'),
        'tipo_usuario'=> 1 
    ]);

    return "Ok";

});
*/
Route::post('/usuario', 'UsuariosController@store');



Route::group(['middleware'=>'admin'], function(){
Route::get('/administrador', 'AdministradorController@index');
Route::get('/logout', 'AdministradorController@logout');


});