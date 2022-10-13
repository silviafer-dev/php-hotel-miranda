<?php

Route::get('/', function()
{
   return View::make('index');
});
Route::get('/about', function()
{
   return View::make('about');
});
Route::get('/contact', function()
{
   return View::make('contact');
});
Route::get('/rooms', function()
{
   return View::make('rooms');
});
Route::get('/room-detail', function()
{
   return View::make('room-detail');
});
Route::get('/offers', function()
{
   return View::make('offers');
});