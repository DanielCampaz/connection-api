<?php

 class DB {

    private $wpdb_c;
    private $name_table;

    public function __construct($tablename){
        global $wpdb;
        $this->wpdb_c = $wpdb;
        $this->name_table = $tablename;
    }


    public function Execute($sql){
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function Prefix(){
        return $this->wpdb_c->prefix;
    }

    public function TableName(){
        return $this->Prefix() . $this->name_table;
    }

    public function Charset_Collate(){
        return $this->wpdb_c->get_charset_collate();
    }

    public function CreateTableSql( $sql){

        $charset_collate = $this->Charset_Collate();

        $sqlF = "CREATE TABLE" . $this->TableName() . $sql . $charset_collate . "";

        $this->Execute($sqlF);
    }

    public function InsertDataSql( $content){
        $this->wpdb_c->insert(
            $this->TableName(),
            $content
        );
    }

    public function GetDataSql( $v, $fs, $value){
        $table_name = $this->TableName();

        return $this->wpdb_c->get_col($this->wpdb_c->prepare("SELECT $v FROM $table_name WHERE $fs", $value));
    }

    public function UpdateDataSql( $sql, $val, $for){
        $table_name = $this->TableName();

        return $this->wpdb_c->get_col($this->wpdb_c->prepare("UPDATE $table_name".$sql, $val, $for));
    }
 }

//  "CREATE TABLE " . $tableName . " (
//     id mediumint(9) NOT NULL AUTO_INCREMENT,
//     fora varchar(300),
//     val varchar(300),
//     PRIMARY KEY  (id)
//     ) "