<?php


Route::get('/', 'SiteController@sobre');
Route::get('/noticias', 'SiteController@noticias');
Route::get('/eventos', 'SiteController@eventos');
Route::get('/download', 'SiteController@downloads');
Route::get('/enviarMensagem', 'ContatosController@create');
Route::post('/enviarMensagem', 'ContatosController@create2');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {

    Route::get('/', 'DashboardController@index');

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', 'UsuariosController@index');
        Route::get('create', 'UsuariosController@create');
        Route::post('create', 'UsuariosController@create2');
        Route::get('update', 'UsuariosController@update');
        Route::post('update', 'UsuariosController@update2');
        Route::get('destroy', 'UsuariosController@destroy');
    });

    Route::group(['prefix' => 'produtos'], function () {
        Route::get('/', 'ProdutosController@index');
        Route::get('create', 'ProdutosController@create');
        Route::post('create', 'ProdutosController@create2');
        Route::get('update', 'ProdutosController@update');
        Route::post('update', 'ProdutosController@update2');
        Route::get('destroy', 'ProdutosController@destroy');
    });
    Route::group(['prefix' => 'sobre'], function () {
        Route::get('update', 'sobreController@update');
        Route::post('update', 'sobreController@update2');
    });

    Route::group(['prefix' => 'noticias'], function () {
        Route::get('/', 'NoticiasController@index');
        Route::get('create', 'NoticiasController@create');
        Route::post('create', 'NoticiasController@create2');
        Route::get('update', 'NoticiasController@update');
        Route::post('update', 'NoticiasController@update2');
        Route::get('destroy', 'NoticiasController@destroy');
        Route::get('Imgs', 'NoticiasController@upload');
        Route::post('Imgs', 'NoticiasController@upload2');

    });

    Route::group(['prefix' => 'eventos'], function () {
        Route::get('/', 'EventosController@index');
        Route::get('create', 'EventosController@create');
        Route::post('create', 'EventosController@create2');
        Route::get('update', 'EventosController@update');
        Route::post('update', 'EventosController@update2');
        Route::get('destroy', 'EventosController@destroy');
        Route::get('Imgs', 'EventosController@upload');
        Route::post('Imgs', 'EventosController@upload2');
    });

    Route::group(['prefix' => 'download'], function () {
        Route::get('/index', 'DownloadController@index');
        Route::get('create', 'DownloadController@create');
        Route::post('create', 'DownloadController@create2');
        Route::get('update', 'DownloadController@update');
        Route::post('update', 'DownloadController@update2');
        Route::get('destroy', 'DownloadController@destroy');
        Route::get('DownloadFile', 'DownloadController@upload');
        Route::post('DownloadFile', 'DownloadController@upload2');
    });
    Route::group(['prefix' => 'contato'], function () {
        Route::get('/index', 'ContatosController@index');
        Route::get('destroy', 'ContatosController@destroy');
    });

});