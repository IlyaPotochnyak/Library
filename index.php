<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 06.07.2017
 * Time: 16:52
 */

use book\Book;
use people\Reader;
use hall\Hall;

require_once 'Autoloader.php';

//require_once 'book/iBook.php';
//require_once 'book/Book.php';



//$book = new Book('Приключения Тома Сойера', 'Марк Твен',
//    'Художественная литература', 320, 100);
//
//
//
//$reader = new Reader('Иван', 25, true, 10, '101.ru');

$library = new Library(
    [
        new Hall('Малый холл', 40, 3, 50, [
            $book = new Book('Приключения Тома Сойера', 'Марк Твен',
                'Художественная литература', 320, 100),
            $book = new Book('Приключения Тома Сойера - обновленная редакция', 'Марк Твен',
                'Художественная литература', 320, 100)
        ]),
        new Hall('Большой холл', 80, 4, 150, [
            new Book('Приключения Тома Сойера', 'Марк Твен',
                'Художественная литература', 320, 100),
            new Book('Приключения Тома Сойера - обновленная редакция', 'Марк Твен',
                'Художественная литература', 320, 100)
        ])
    ],
    [
        new Reader('Иван', 25, true, 10, '101.ru'),
        new Reader('Мария', 27, false, 20, '201.ru')

    ],
    'Москва'
);

//print_r($library);

echo $library->getPeople()[1];
