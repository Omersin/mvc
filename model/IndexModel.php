<?php
class IndexModel extends Model {
    protected $pdo = null;
    protected $host = 'localhost';
    protected $dbname = 'admin';
    protected $username = 'root';
    protected $password = '';
    protected $charset = 'utf8';

    public function __construct(){
        try {
            $this->pdo = new pdo("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
        } catch(PDOException $err){
            die($err->getMessage());
        }
    }

    public function getHelloWord(){
        return 'Hello Word...';
    }
}