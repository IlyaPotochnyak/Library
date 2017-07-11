<?php

/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 07.07.2017
 * Time: 16:59
 */
class Library
{
    private $hall = [];
    private $people = [];
    private $address;

    /**
     * Паттерн Синглтон
     * @var $_instance
     */
    protected static $_instance;

    /**
     * Library constructor.
     * @param array $hall
     * @param array $people
     * @param $address
     */
    private function __construct(array $hall, array $people, $address)
    {
        $this->hall = $hall;
        $this->people = $people;
        $this->address = $address;
    }

    public static  function getInstance(array $hall = [], array $people = [], $address = '')
    {
        if (self::$_instance === null) {
            self::$_instance = new self($hall, $people, $address);
        }
        return self::$_instance;
    }

    /**
     * Используется при обратной сериализации объекта
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * Чтобы объект нельзя было склонировать
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    /**
     * @return array
     */
    public function getHall(): array
    {
        return $this->hall;
    }

    /**
     * @param array $hall
     */
    public function setHall(array $hall)
    {
        $this->hall = $hall;
    }

    /**
     * @return array
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * @param array $people
     */
    public function setPeople(array $people)
    {
        $this->people = $people;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }



}