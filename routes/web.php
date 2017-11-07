<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'PostsController@index');
// Controllers are not needed when using blade
// Route::get('/about', 'AboutConroller@index');

Route::get('/', function()
{
  return View::make('pages.home');
});

Route::get('about', function()
{
  return View::make('pages.about');
});

Route::get('resources', function()
{
  return View::make('pages.resources');
});

Route::get('court-forms', function()
{
  return View::make('resources.pages.court-forms');
});

Route::get('legal', function()
{
  return View::make('resources.pages.legal');
});

Route::get('support', function()
{
  return View::make('resources.pages.support');
});

Route::get('get-involved', function()
{
  return View::make('pages.get-involved');
});

Route::get('store', function()
{
  return View::make('pages.store');
});
Route::get('contact', function()
{
  return View::make('pages.contact');
});

Route::get('login', function()
{
  return View::make('pages.login');
});

// Eloquent model => Post

// migration => create_posts_table
