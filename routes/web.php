<?php

use Illuminate\Support\Facades\Route;
<?php
Route::get('/', function () {
    return view('hii');
});
// Задача 1
Route::get('/test/', function () {
    return '!';
});
// Задача 2
Route::get('/dir/test/', function () {
    return '!!!!!!!!!';
});
// Задача 3
Route::get('/user/{id}', function ($id) {
    return $id;
});
// Задача 4
Route::get('/user/{name}', function ($name) {
    return 'Вася' . $name;
});
// Задача 5
Route::get('/sum/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});
// Задача 6
Route::get('/user/show-{id}', function ($id) {
    return $id;
});
// Задача 7
Route::get('/user/{id?}', function ($id = 0) {
    return $id;
});


