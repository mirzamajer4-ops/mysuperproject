<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return 'Привет, это тестовая страница!';
});

Route::get('/dir/test', function () {
    return 'Содержимое директории test';
});

Route::get('/user/{name}', function ($name) {
    return 'Пользователь: ' . $name;
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return 'Пользователь: ' . $name . ' ' . $surname;
});

Route::get('/city/{city?}', function ($city = 'omsk') {
    return 'Город: ' . $city;
});
Route::get('/user/{id}', function ($id) {
    return 'ID пользователя: ' . $id;
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ', Имя: ' . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]{2,}']);

Route::get('/posts/{date}', function ($date) {
    return 'Дата: ' . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'Дата: ' . $year . '-' . $month . '-' . $day;
})->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}', 'day' => '[0-9]{2}']);

Route::get('/users/{order}', function ($order) {
    return 'Сортировка по: ' . $order;
})->where('order', '(name|surname|age)');

Route::get('/city/{name}', function ($name) {
    return 'Город: ' . $name;
})->whereAlpha('name');

Route::get('/user/all', function () {
    return 'Список всех пользователей';
});

Route::get('/user/{id}', function ($id) {
    return 'Пользователь с ID: ' . $id;
})->where('id', '[0-9]+');

Route::get('/user/all', function () {
    return 'Все пользователи';
});

Route::get('/user/', function () {
    return 'Главная страница пользователей';
});

Route::get('/user/{id?}', function ($id = null) {
    return 'ID: ' . $id;
});

Route::get('/user/{id}', function ($id) {
    return 'ID: ' . $id;
})->where('id', '[0-9]+');

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Все пользователи';
    });

    Route::get('/user/{id}', function ($id) {
        return 'Пользователь: ' . $id;
    });
});


