<?php
require_once dirname(__FILE__, 4) . '\interface\singleton.php';
require_once dirname(__FILE__, 4) . '\interface\factory.php';
require_once dirname(__FILE__, 4) . '\enums\dbName.php';
require_once dirname(__FILE__) . '\dbs.php'; 

class FactoryDB implements Singleton, Factory {

    public static ?FactoryDB $_factoryDBSG = null;

    public static function Instance(): FactoryDB
    {
        if(self::$_factoryDBSG === null) {
            self::$_factoryDBSG = new FactoryDB();
        }

        return self::$_factoryDBSG;
    }

    public function getInstace(DBNAMES $_dbName){
        switch ($_dbName) {
            case DBNAMES::API:
                return DBS::InstanceApi();
                break;
            case DBNAMES::ENDPOINT:
                return DBS::InstanceEndpoint();;
                break;
            case DBNAMES::QUERY:
                return DBS::InstanceQuery();;
                break;
            case DBNAMES::ACTION:
                return DBS::InstanceAction();;
                break;
            case DBNAMES::SAVEIMAGE:
                return DBS::InstanceSaveImage();;
                break;
            case DBNAMES::POSTTYPE:
                return DBS::InstancePostType();;
                break;
        }
    }
}