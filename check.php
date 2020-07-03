<?php

class check
{
    public $name;
    public $status;
    public $lastPing;

    function __construct($_name, $_status, $_lastPing) {
        $this->name = $_name;
        $this->status = $_status;
        $this->lastPing = $_lastPing;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastPing()
    {
        return $this->lastPing;
    }

    public function setLastPing($lastPing)
    {
        $this->lastPing = $lastPing;
    }
}


