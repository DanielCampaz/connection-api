<?php

class SaveImage {

    public int $id = -1;
    public int $count;
    //FIXME: type --> SaveImageOBJ
    public array $SIObj;

    public function __construct(int $_count, array $_SIObj)
    {
      $this->count = $_count;
      $this->SIObj = $_SIObj;
    }
}

class SaveImageObj {
    public string $type;
    public string $value;

    public function __construct(string $_type, string $_value)
    {
      $this->type = $_type;
      $this->value = $_value;   
    }
}