<?php
require_once dirname(__FILE__, 2). '\interfaces\action.php';
require_once __DIR__ . '\line.php';

class BackupAction implements Action{

    private Line $line;
    private string $title;

    public function __construct(Line $_line, $_title) {
        $this->line = $_line;
        $this->title = $_title;
    }

    public function DoAction (): void {
        print_r("Ejecutando $this->title");
    }
}