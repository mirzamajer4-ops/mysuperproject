<?php


class LabController extends Controller
	




{
    return view('view', [//1
    'name' => 'Дима',
    'age' => 52,
    'salary' => 690000 
]);
return view('view', ['class' => 'my-class']);//2

return view('view', [ //3
    'value1' => 'текст1',
    'value2' => 'текст2',
    'value3' => 'текст3'
]);

return view('view', ['style' => 'color: red;']);//4

return view('view', [//5
    'text' => 'Перейти',
    'href' => '/link'
]);

return view('view', [//7
    'employee' => [
        'name' => 'Мирза',
        'age' => 3,
        'salary' => 980000
    ]
]);

return view('view', ['array' => [1, 2, 3, 4, 5]]);//8

return view('view', ['city' => 'Санкт-Петербург']);//9

return view('view', [//10
    'location' => [
        'country' => 'Россия',
        'city' => 'Новороссийск'
    ]
]);

public function task11() {//11
    return view('view', [
        'year' => 2026,
        'month' => 9,
        'day' => 27
    ]);
}

public function task12() {//12
    return view('view', [
        'str' => '<b>Жирный текст</b>'
    ]);
}
}