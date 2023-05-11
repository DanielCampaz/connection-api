<?php

class CommonPost {
    public string $type;
    public string $name;

    public function __construct(string $_type, string $_name)
    {
        $this->type = $_type;
        $this->name = $_name;
    }
}