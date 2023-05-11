<?php

class Query {

    public int $id = -1;
    public string $type_send;
    public string $key;
    public string $value;
    public string $type_response;
    public string $path_data;
    public Action $action;

    public function __construct(string $_type_send, string $_key, string $_value, string $_type_response, string $_path_data, Action $_action)
    {
        $this->type_send = $_type_send;
        $this->key = $_key;
        $this->value = $_value;
        $this->type_response = $_type_response;
        $this->path_data = $_path_data;
        $this->action = $_action;
    }
}
