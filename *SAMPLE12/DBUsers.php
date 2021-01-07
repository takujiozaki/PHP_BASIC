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

    public function store(array $user):bool{
        $sql = 'INSERT INTO users VALUES (:userid, :password, :user_name)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':userid',$user['userid'],PDO::PARAM_STR);
        $stmt->bindParam(':password',$user['password'],PDO::PARAM_STR);
        $stmt->bindParam(':user_name',$user['user_name'],PDO::PARAM_STR);

        return $stmt->execute();
    }
}