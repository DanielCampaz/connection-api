<?php
require_once __DIR__ . '\enpoint.php';
require_once dirname(__FILE__, 2). '\interfaces\collection.php';
class Api implements Collection{

    public int $id = -1;
    public string $name;
    public string $base_url;
    public bool $aupdate;
    public int $update_time;
    public bool $asession;
    public int $refresh_token;
    public string $email;
    public string $apassword;
    public string $session_endpoint;
    public string $hs_session;
    public bool $api_key;
    public string $api_key_value;
    public string $api_key_attribute;
    public string $hs_api_key;
    public int $count_endpoints;
    //FIXME: type --> Endpoint
    public array $endpoints;

    public function __construct(string $_name, string $_base_url, bool $_update, int $_update_time, bool $_session, int $_refresh_token, string $_email, string $_password, string $_session_endpoint, string $_hs_session, bool $_api_key, string $_api_key_value, string $_api_key_attribute, string $_hs_api_key, int $_count_endpoints, array $_endpoints) {
        $this->name = $_name;
        $this->base_url = $_base_url;
        $this->aupdate = $_update;
        $this->update_time = $_update_time;
        $this->asession = $_session;
        $this->refresh_token = $_refresh_token;
        $this->email = $_email;
        $this->apassword = $_password;
        $this->session_endpoint = $_session_endpoint;
        $this->hs_session = $_hs_session;
        $this->api_key = $_api_key;
        $this->api_key_value = $_api_key_value;
        $this->api_key_attribute = $_api_key_attribute;
        $this->hs_api_key = $_hs_api_key;
        $this->count_endpoints = $_count_endpoints;
        $this->endpoints = $_endpoints;
    }


    public static function Instance(mixed $data) {
        if(!$data["name_api"] || !$data["url_api_base"] || !$data["endpoints_api"] || $data["endpoints_api"] == 0 ||  $data["endpoints_api"] < 0 ) {
            print_r("Es necesario name, base url, endpoints++++++++++");
        }
        $update_ = 0;
        $session_ = 0;
        $api_key_ = 0;
        $update_time_ = 0;
        $refresh_token_ = 0;
        $email_ = 'null';
        $password_ = 'null';
        $session_endpoint_ = 'null';
        $hs_session_ = 'null';
        $api_key_value_ = 'null';
        $api_key_attribute_ = 'null';
        $hs_api_key_ = 'null';
        $name_ = $data["name_api"];
        $base_url_ = $data["url_api_base"];
        $count_endpoints_ = $data["endpoints_api"];
        if(array_key_exists("update_config_api_need", $data)){
            if($data["update_config_api_need"]){
                $update_ = true;
            }
        }
        if(array_key_exists("need_session", $data)){
            if($data["need_session"]){
                $session_ = true;
            }
        }
        if(array_key_exists("api_key", $data)){
            if($data["api_key"]){
                $api_key_ = true;
            }
        }
        if(array_key_exists("update_time", $data)){
            if($data["update_time"]){
                $update_time_ = $data["update_time"];
            }
        }
        if(array_key_exists("refresh_token", $data)){
            if($data["refresh_token"]){
                $refresh_token_ = $data["refresh_token"];
            }
        }
        if(array_key_exists("email_credential_api", $data)){
            if($data["email_credential_api"]){
                $email_ = $data["email_credential_api"];
            }
        }
        if(array_key_exists("password_credential_api", $data)){
            if($data["password_credential_api"]){
                $password_ = $data["password_credential_api"];
            }
        }
        if(array_key_exists("endpoint_session", $data)){
            if($data["endpoint_session"]){
                $session_endpoint_ = $data["endpoint_session"];
            }
        }
        if(array_key_exists("h_s_is_r", $data)){
            if($data["h_s_is_r"]){
                $hs_session_ = $data["h_s_is_r"];
            }
        }
        if(array_key_exists("api_key_text", $data)){
            if($data["api_key_text"]){
                $api_key_value_ = $data["api_key_text"];
            }
        }
        if(array_key_exists("api_key_name_attr", $data)){
            if($data["api_key_name_attr"]){
                $api_key_attribute_ = $data["api_key_name_attr"];
            }
        }
        if(array_key_exists("h_s_ak_r", $data)){
            if($data["h_s_ak_r"]){
                $hs_api_key_ = $data["h_s_ak_r"];
            }
        }

        $endpoints_ = [];

        for($i = 1; $i <= $count_endpoints_; $i++) {
            if($data["endpoints_api_name_".$i]) {
                 array_push($endpoints_, new Endpoint($data["endpoints_api_name_".$i], array()));
            }
        }
        
        $api = new Api($name_, $base_url_, $update_, $update_time_, $session_, $refresh_token_, $email_, $password_, $session_endpoint_, $hs_session_, $api_key_, $api_key_value_, $api_key_attribute_, $hs_api_key_, $count_endpoints_, $endpoints_);
        return $api;
    }

    public static function getTable(): string {
        return "(
            id mediumint(9) NOT NULL AUTO_INCREMENT,
             name varchar(300) NOT NULL,
             base_url varchar(300) NOT NULL,
             aupdate int,
             update_time int,
             asession int,
             refresh_token int,
             email varchar(300),
             apassword varchar(300),
             session_endpoint  varchar(300),
             hs_session  varchar(300),
             api_key int,
             api_key_value  varchar(300),
             api_key_attribute varchar(300),
             hs_api_key  varchar(300),
             count_endpoint int NOT NULL,
             endpoints  varchar(300),
             PRIMARY KEY (id)
            )";
    }

    public function Save(DB $dbapi) {
        print_r($this);
    }

}

