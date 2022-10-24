<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * Authors routes
 */
$router->get('/books', 'BookController@index');
$router->post('/books', 'BookController@store');
$router->get('/book/{book}', 'BookController@show');
$router->put('/book/{book_id}', 'BookController@update');
$router->patch('/book/{book_id}', 'BookController@update');
$router->delete('/book/{book_id}', 'BookController@destroy');


/**
 * Books routes
 */
$router->get('/authors', 'AuthorController@index');
$router->post('/author', 'AuthorController@store');
$router->get('/author/{author}', 'AuthorController@show');
$router->put('/author/{author_id}', 'AuthorController@update');
$router->patch('/author/{author_id}', 'AuthorController@update');
$router->delete('/author/{author_id}', 'AuthorController@destroy');
