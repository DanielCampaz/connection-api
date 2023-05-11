<?php
require_once dirname(__FILE__, 4) . '\interface\singleton.php';
require_once dirname(__FILE__, 1) . '\db.php';

class DBS implements Singleton {

    public static ?DBS $_DBSSG = null;

    public static function Instance(): DBS
    {
        if(self::$_DBSSG === null) {
            self::$_DBSSG = new DBS();
        }

        return self::$_DBSSG;
    }

    public static function InstanceApi(): DB {
        return new DB("Api");
    }

    public static function InstanceEndpoint(): DB {
        return new DB("Enpoint");
    }

    public static function InstanceQuery(): DB {
        return new DB("Query");
    }

    public static function InstanceAction(): DB {
        return new DB("Action");
    }

    public static function InstancePostType(): DB {
        return new DB("PostType");
    }

    public static function InstanceSaveImage(): DB {
        return new DB("SaveImage");
    }
}