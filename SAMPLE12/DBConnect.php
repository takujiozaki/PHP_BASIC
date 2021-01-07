<?php

/**
 * DBConnect.php:MySQL接続
 */
class DBConnect
{
    protected $dbh;//DataBase handler
    private $db_host = '127.0.0.1';
    private $db_name = 'phpsample';
    private $db_user = 'php';
    private $db_password = 'Secret01%';

    public function getDbh(){
        //接続設定
        $dsn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset=utf8';
        try{
            $this->dbh = new PDO($dsn, $this->db_user, $this->db_password);
        }catch(PDOException $e){
            die("データベース接続でエラーが発生しました".$e->getMessage());//TEST用
        }
    }
}



