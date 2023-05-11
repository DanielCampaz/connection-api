<?php
class PostArray {
    public int $count;
    //FIXME: type --> CommonPost
    public array $CPObj;

    public function __construct(int $_count, array $_CPObj)
    {
        $this->count = $_count;
        $this->CPObj = $_CPObj;
    }
}