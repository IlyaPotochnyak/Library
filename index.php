<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 06.07.2017
 * Time: 16:52
 */

use book\Book;

require_once 'book/iBook.php';
require_once 'book/Book.php';



$book = new Book('Приключения Тома Сойера', 'Марк Твен',
    'Художественная литература', 320, 100);

echo $book->getName();