<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <p>{{ $name }}</p><!--1-->
        <p>{{ $age }}</p>
        <p>{{ $salary }}</p>

        <div class="{{ $class }}"></div><!--2-->

        <input type="text" value="{{ $value1 }}"><!--3-->
        <input type="text" value="{{ $value2 }}">
        <input type="text" value="{{ $value3 }}">

        <p style="{{ $style }}">Текст</p><!--4-->

        <a href="{{ $href }}">{{ $text }}</a><!--5-->

<p>Текущая дата: {{ date('d.m.Y') }}</p><!--6-->,j,j

<p>{{ $employee['name'] }}</p><!--7-->j,j,
<p>{{ $employee['age'] }}</p>
<p>{{ $employee['salary'] }}</p>

<p>Количество элементов: {{ count($array) }}</p><!--8-->j,j,

<p>Город: {{ $city ?? 'Москва' }}</p><!--9-->

<p>Страна: {{ $location['country'] ?? 'Россия' }}</p><!--10-->
<p>Город: {{ $location['city'] ?? 'Москва' }}</p>

<p>Год: {{ $year ?? date('Y') }}</p><!--11-->
<p>Месяц:

{!! $str !!}<!--12-->
</body>
</html>