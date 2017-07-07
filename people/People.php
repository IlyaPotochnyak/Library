<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 07.07.2017
 * Time: 14:57
 */

namespace people;


use book\iBook;

abstract class People
{
    private $name;
    private $age;
    private $isMale;
    private $countBookRead;
    private $email;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getIsMale()
    {
        return $this->isMale;
    }

    /**
     * @param mixed $isMale
     */
    public function setIsMale($isMale)
    {
        $this->isMale = $isMale;
    }

    /**
     * @return mixed
     */
    public function getCountBookRead()
    {
        return $this->countBookRead;
    }

    /**
     * @param mixed $countBookRead
     */
    public function setCountBookRead($countBookRead)
    {
        $this->countBookRead = $countBookRead;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * People constructor.
     * @param $name
     * @param $age
     * @param $isMale
     * @param $countBookRead
     * @param $email
     */
    public function __construct($name, $age, $isMale, $countBookRead, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        $this->countBookRead = $countBookRead;
        $this->email = $email;
    }


    public function readBook(iBook $book)
    {
        
    }

    public function takeBook()
    {
        
    }

    public function returnBook()
    {
        
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return '<h2>Посетитель библиотеки</h2>Имя: ' . $this->name . '<br>'
            . 'Возраст: ' . $this->age . '<br>'
            . 'Пол: ' . ($this->isMale ? 'Мужской' : 'Женский') . '<br>'
            . 'Прочитано книг: ' . $this->countBookRead . '<br>'
            . 'Email: ' . $this->email . '<br>';

    }

}