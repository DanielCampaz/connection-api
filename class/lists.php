<?php

    class Lists {

        private array $list = [];

        public function __construct(){
        }

        public function Add($item){
            array_push($this->list, $item);
        }

        public function Get(){
            return $this->list;
        }

        public function Pop(){
            array_pop($this->list);
        }

        public function Remove($index){
            unset($this->list[$index]);
        }

        public function Foreach($function){
            foreach ($this->list as &$value){
                $function($value);
            }
        }
    }