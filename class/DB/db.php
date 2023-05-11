<?php

 class DB {

    private $wpdb_c;
    private $name_table;
    private $sql;

    public function __construct($tablename){
        global $wpdb;
        $this->wpdb_c = $wpdb;
        $this->name_table = strtolower($tablename);
    }

    public function Set_TableSql(string $_sql) {
        $this->sql = $_sql;
    }
    public function Execute($sql){
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function TableName(){
        return $this->wpdb_c->prefix . "_smart_api_connect_" . $this->name_table;
    }

    public function Charset_Collate(){
        return $this->wpdb_c->get_charset_collate();
    }

    public function CreateTableSql(){

        $charset_collate = $this->Charset_Collate();

        $sqlF = "CREATE TABLE " . $this->TableName(). " " . $this->sql  . " " . $charset_collate . "";

        $this->Execute($sqlF);
        $success = empty($this->wpdb_c->last_error);
        print_r($success);
        print_r($sqlF);
    }

    public function InsertDataSql($content): int{
        $this->wpdb_c->insert(
            $this->TableName(),
            $content
        );

        return $this->wpdb_c->insert_id;
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