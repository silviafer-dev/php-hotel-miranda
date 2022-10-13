<?php

Route::get('/', function()
{
   return View::make('index');
});
Route::get('/about', function()
{
   return View::make('about');
});