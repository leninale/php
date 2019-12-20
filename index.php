<?php

$result = [
    'author' => [
        [
            'FIO' => 'Pushkin',
            'email' => 'qwe@qwe.ru',
        ]
    ],
    'book' => [
        [
            'name' => 'firstBook',
            'author' => 'qwe@qwe.ru',
        ]
    ],
];

 $result2 = [
     'author' => [
         [
             'FIO' => 'Pushkin',
             'email' => 'qwe@qwe.ru',
         ],
         [
             'FIO' => 'Dostoevskiy',
             'email' => 'qwe1@qwe.ru',
         ],
         [
             'FIO' => 'Lermontov',
             'email' => 'qwe2@qwe.ru',
         ],
     ],
     'book' => [
         [
             'name' => 'firstBook',
             'author' => 'qwe@qwe.ru',
         ],
         [
             'name' => 'secondBook',
             'author' => 'qwe@qwe.ru',
         ],
         [
             'name' => 'thirdBook',
             'author' => 'qwe2@qwe.ru',
         ],
     ],
 ];

$result3 = [
    'author' => [
        'qwe@qwe.ru' => [
            'FIO' => 'Pushkin',
            'DateBirthday' => '1990',
        ],
        'qwe1@qwe.ru' => [
            'FIO' => 'Dostoevskiy',
            'DateBirthday' => '1796',
        ],
        'qwe2@qwe.ru' => [
            'FIO' => 'Lermontov',
            'DateBirthday' => '1823',
        ],
    ],
    'book' => [
        [
            'name' => 'firstBook',
            'author' => 'qwe@qwe.ru',
        ],
        [
            'name' => 'secondBook',
            'author' => 'qwe@qwe.ru',
        ],
        [
            'name' => 'thirdBook',
            'author' => 'qwe2@qwe.ru',
        ],
    ],
];

$title = "Bibl Book";
$red = (bool) rand(0, 1);

//print_r($result);
//print_r($result2);

/*foreach ($result3['book'] as $book){
    echo sprintf("Книга %s, ее написал %s %s года рождения Email: %s", $book['name'], $result3['author'][$book['author']]['FIO'], $result3['author'][$book['author']]['DateBirthday'], $book['author']);
}
shuffle($result3['book']);

foreach ($result3['book'] as $book){
    echo sprintf("Книга %s, ее написал %s %s года рождения Email: %s", $book['name'], $result3['author'][$book['author']]['FIO'], $result3['author'][$book['author']]['DateBirthday'], $book['author']);
}*/

