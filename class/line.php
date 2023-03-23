<?php
require_once __DIR__ . '\lists.php';
require_once __DIR__ . '\backupaction.php';
require_once dirname(__FILE__, 2). '\interfaces\command.php';
require_once dirname(__FILE__, 2). '\interfaces\action.php';

class Line implements Command {
    
    private Lists $list;

    public function __construct()
    {
        $this->list = new Lists();
    }

    public function Add(Action $item){
        $this->list->Add($item);
    }

    public function GetList(){
        return $this->list->Get();
    }

    public function Execute() : void
    {
        $this->list->Foreach(function(Action $item) {
            $index = array_search($item,$this->list->Get());
            $item->DoAction();
            $this->list->Remove($index);
        });
    }
}

