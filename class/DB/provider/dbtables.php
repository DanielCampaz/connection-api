<?php
require_once dirname(__FILE__, 4) . '\interface\singleton.php';

class DBTABLES implements Singleton{
    public static ?DBTABLES $_dbtablesSG = null;
    public array $_tables = [];

    public static function Instance(): DBTABLES
    {
        if(self::$_dbtablesSG === null) {
            self::$_dbtablesSG = new DBTABLES();
        }

        return self::$_dbtablesSG;
    }

    public function Add(DBNAMES $_dbname, $_table) {
        array_push($this->_tables, new DBTABLE($_dbname, $_table));
    }

}


class DBTABLE {
    
    public DBNAMES $DBNAME;
    public string $table;

    public function __construct(DBNAMES $dbname, string $_table)
    {
        $this->DBNAME = $dbname;
        $this->table = $_table;
    }
}
