<?php
require_once __DIR__ . '\common.php';

class PostStatus extends CommonPost {
    public bool $dynamic;
    public string $status;

    public function __construct(bool $_dynamic, string $_status, string $_type, string $_name)
    {
        parent::__construct($_type, $_name);
        $this->status = $_status;
        $this->dynamic = $_dynamic;
    }
}