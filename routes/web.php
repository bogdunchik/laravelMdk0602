<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Pr15Controller;
use App\Http\Controllers\Pr16Controller;

Route::get('/', function () {
    return 'привееет эт главная стр!!!!';});

Route::get('/check-db-config', function() {
    return [
        'DB_HOST' => env('DB_HOST'),
        'DB_PORT' => env('DB_PORT'),
        'DB_DATABASE' => env('DB_DATABASE'),
        'DB_USERNAME' => env('DB_USERNAME'),
        'DB_PASSWORD' => env('DB_PASSWORD'),
    ];
});
// Задача 1
Route::get('/test', function () {
    return 'привееет!!!!';
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

Route::get('/pr5', function () {
    return view('pr5', [
        'name' => 'Гриша',
        'age' => 30,
        'salary' => 50000,
        'cssClass' => 'active',
        'value1' => 'Значение 1',
        'value2' => 'Значение 2',
        'value3' => 'Значение 3',
        'cssStyle' => 'color: red;',
        'text' => 'Ссылка на главную',
        'href' => '/test',
        'employee' => [
            'name' => 'Петр',
            'age' => 25,
            'salary' => 40090,
        ],
        'array' => [1, 2, 3, 4, 5],
        'city' => 'Омск',
        'location' => [
            'country' => 'Россия',
            // 'city' => 'Москва',
        ],

        'day' => 15,
        'month' => 10,
        'year' => 2023,
        'str' => '<b>Жирный текст</b>',
    ]);
});
Route::get('/pr6', function () {
    return view('pr6', [
        'dayNumber' => 7,
        'monthNumber' => 6, 
        'age' => 13, 
        'numbers' => [10, 20, 30], 
    ]);
});
Route::get('/pr7', function () {
    return view('pr7', [
        'numbers' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
        'strings' => ['Первый', 'Второй', 'Третий', 'чт'],
        'data' => [10, 20, 30], //'data' => 45,
        'employees' => [
            ['name' => 'Иван', 'surname' => 'Иванов', 'salary' => 39500],
            ['name' => 'Петр', 'surname' => 'Гарька', 'salary' => 40000],
            ['name' => 'Данько', 'surname' => 'Сидоров', 'salary' => 50000],
        ],
    ]);
});

Route::get('/pr8', function () {
    return view('pr8');
});

Route::get('/pr9', function () {
    return view('pr9', [
        'links' => [
            ['text' => 'test', 'href' => '/test'],
            ['text' => 'Ссылка 2', 'href' => '/link2'],
            ['text' => 'Ссылка 3', 'href' => '/link3'],
        ],
        'employees' => [
             ['name' => 'Иван', 'surname' => 'Иванов', 'salary' => 39500],
            ['name' => 'Петр', 'surname' => 'Гарька', 'salary' => 40000],
            ['name' => 'Данько', 'surname' => 'Сидоров', 'salary' => 50000],
        ],
        'users' => [
            ['name' => 'Алексей', 'surname' => 'Алексеев', 'banned' => true],
            ['name' => 'Борис', 'surname' => 'Борисов', 'banned' => false],
            ['name' => 'Виктор', 'surname' => 'Викторов', 'banned' => true],
        ],
        'strings' => ['Опция 1', 'Опция 2', 'Опция 3'],
        'days' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        'currentDay' => 5,
]);
});

Route::get('/test/form', [TestController::class, 'form']);
Route::post('/test/result', [TestController::class, 'result']);
Route::get('/posts', [PostController::class, 'showAllPR']);
Route::get('/posts/{id}', [PostController::class, 'showOnePR']);


Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'handleForm']);
Route::get('/register', [FormController::class, 'showRegisterForm']);
Route::post('/register', [FormController::class, 'handleRegister']);
Route::match(['get', 'post'], '/method', [FormController::class, 'method']);

Route::get('/session/set', [SessionController::class, 'setSession']);
Route::get('/session/get', [SessionController::class, 'getSession']);
Route::get('/counter', [SessionController::class, 'counter']);
Route::get('/firstVisitTime', [SessionController::class, 'firstVisitTime']);
Route::get('/pushToArray', [SessionController::class, 'pushToArray']);
Route::get('/forgetSession', [SessionController::class, 'forgetSession']);
Route::get('/pullSession', [SessionController::class, 'pullSession']);
Route::get('/flushSession', [SessionController::class, 'flushSession']);
Route::get('/allSession', [SessionController::class, 'allSession']);
Route::get('/checkSession', [SessionController::class, 'checkSession']);
Route::get('/sessionHelperSet', [SessionController::class, 'sessionHelperSet']);
Route::get('/sessionHelperGet', [SessionController::class, 'sessionHelperGet']);

Route::match(['get', 'post'], '/pr15/form', [Pr15Controller::class, 'form']);
Route::get('/pr15/success', [Pr15Controller::class, 'yep']);
Route::match(['get', 'post'], '/pr15/2', [Pr15Controller::class, 'pr1521']);
Route::get('/pr15/mailOk', [Pr15Controller::class, 'mailOk']);

Route::get('/pr15/nameP', [Pr15Controller::class, 'pr1531']);
Route::get('/pr15/target', [Pr15Controller::class, 'target'])->name('namedPath');

Route::get('/pr15/nameParameters', [Pr15Controller::class, 'pr1541']);
Route::get('/pr15/{p1}/{p2}', [Pr15Controller::class, 'withPars'])->name('pathPars');
Route::get('/pr16/set', [Pr16Controller::class, 'pr1611']);
Route::get('/pr16/show', [Pr16Controller::class, 'pr1612']);
Route::match(['get', 'post'], '/pr16/form', [Pr16Controller::class, 'pr1621']);

