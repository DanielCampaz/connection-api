<?php
class PostSingle {
    public CommonPost $CPObj;

    public function __construct(CommonPost $_CPObj)
    {
        $this->CPObj = $_CPObj;
    }
}