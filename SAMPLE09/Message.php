<?php

class Message{
    private $name;
    private $datetime;
    private $body;

    public function __construct(string $name, DateTime $date, string $body){
        $this->name = $name;
        $this->date = $date;
        $this->body = $body;
    }

    public function getName():string{
        return $this->name;
    }

    public function getDateTime():DateTime{
        return $this->date;
    }

    public function getBody():string{
        return $this->body;
    }

}