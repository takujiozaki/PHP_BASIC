<?php
/**
 * DBUsers.php:usersテーブルのDAO
 */
require_once('DBConnect.php');
class DBUsers extends DBConnect{

    public function __construct(){
        parent::getDbh();
    }

    public function get_password_by_userid(string $userid):?string{
        $sql = 'SELECT password FROM users WHERE userid = :userid';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':userid',$userid,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        return (!empty($result)) ? $result['password']: null;
    }
}