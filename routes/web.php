<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('hiii');
});
// Задача 1
Route::get('/test/', function () {
    return 'привееет!';
});
// Задача 2
Route::get('/dir/test/', function () {
    return '!!!!';
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
// для 2 практики по контроллерам
Route::get('/pages/show', [PageController::class, 'show']);
Route::get('/pages/all', [PageController::class, 'showAll']);
Route::get('/pages/show/{id}', [PageController::class, 'showOne'])->where('id', '[0-9]+');
Route::get('/test/sum/{num1}/{num2}', [TestController::class, 'sum']);
Route::get('/employee/show/{id}', [EmployeeController::class, 'showOne']);
Route::get('/employee/field/{id}/{field}', [EmployeeController::class, 'showField']);
