<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 06.07.2017
 * Time: 17:12
 */

namespace book;


interface iBook
{
    public function getName(); // Получаем название книги
    public function setName($name); // Задаем название книги
    public function getId(); // Получаем идентификатор
    public function getType(); // Получаем раздел книги
    public function getAuthor(); // Получаем автора книги
    public function getYear(); // Получаем год выпуска книги
    public function getPage(); // Кол-во страниц книги
    public function getCondition(); // Качество книги
    public function reduceCondition(); // уменьшить качество книги

}