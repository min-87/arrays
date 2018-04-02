<?php
/*
Обратите внимание на сходство json и ассоциативного массива. Оно не случайно. Json, является представлением ассоциативного массива в текстовом виде. Composer, во время каждого запуска считывает этот файл.
src\Arrays.php

Реализуйте функцию getComposerFileData, которая возвраащет ассоциативный массив, соответствующий json из файла composer.json в этом упражнении. Все что вам нужно сделать, посмотреть на содержимое composer.json и руками сформировать массив аналогичной структуры

{
  "autoload": {
    "files": [
      "src/Arrays.php"
    ]
  },
  "config": {
    "vendor-dir": "/composer/vendor"
  }
}
*/

//Variant 1

<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getComposerFileData()
{
    $map = ["autoload" => ["files" => ["src/Arrays.php"]],"config" =>["vendor-dir" => "/composer/vendor"]];
    return $map;
}
// END

//Variant 2

// BEGIN

function getComposerFileData()
{
    return [
        'autoload' => [
            'files' => [
                'src/Arrays.php'
            ]
        ],
        'config' => [
            'vendor-dir' => '/composer/vendor'
        ]
    ];
}
// END
