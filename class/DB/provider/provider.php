<?php
require_once dirname(__FILE__, 4) . '\interface\singleton.php';
require_once dirname(__FILE__, 2) . '\db.php';
require_once dirname(__FILE__) . '\factorydb.php'; 
require_once dirname(__FILE__) . '\dbtables.php'; 
require_once dirname(__FILE__, 4) . '\enums\dbName.php';

class ProviderDB implements Singleton {

    public static ?ProviderDB $_providerDBSG = null;
    public ?DB $_db = null;
    private array $_dbs_arrays;

    protected function __construct() {
        $this->_dbs_arrays = [DBNAMES::API, DBNAMES::ENDPOINT, DBNAMES::QUERY, DBNAMES::ACTION, DBNAMES::SAVEIMAGE, DBNAMES::POSTTYPE];
    }

    public static function Instance(): ProviderDB
    {
        if(self::$_providerDBSG === null) {
            self::$_providerDBSG = new ProviderDB();
        }

        return self::$_providerDBSG;
    }

    public function getDB(DBNAMES $_dbName) {
        $factoryDB_Instace = FactoryDB::Instance();
        return $factoryDB_Instace->getInstace($_dbName);
    }

    public function CreateDataTables() {
        $tables = DBTABLES::Instance();
        foreach($tables->_tables as &$table) {
            foreach($this->_dbs_arrays as &$dbname) {
                if($table->DBNAME === $dbname) {
                    $db = $this->getDB($dbname);
    
                    $db->Set_TableSql($table->table);
                }
            }
        }
    }

}