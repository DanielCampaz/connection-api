<?php

class Endpoint {
    
    public int $id = -1;
    public string $name;
    //FIXME: type --> Query
    public array $querys;
    
    public function __construct(string $_name, array $_querys)
    {
        $this->name = $_name;
        $this->querys = $_querys;
    }
}