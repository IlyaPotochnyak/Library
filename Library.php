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
     * Library constructor.
     * @param array $hall
     * @param array $people
     * @param $address
     */
    public function __construct(array $hall, array $people, $address)
    {
        $this->hall = $hall;
        $this->people = $people;
        $this->address = $address;
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