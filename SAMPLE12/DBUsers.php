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
        $sql = 'INSERT INTO users VALUES (:userid, :password, :username)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':userid',$user['userid'],PDO::PARAM_STR);
        $stmt->bindParam(':password',$user['password'],PDO::PARAM_STR);
        $stmt->bindParam(':username',$user['username'],PDO::PARAM_STR);

        return $result = $stmt->execute();
    }

    //useridからusernameを取得
    public function get_username_by_id(string $userid):?string{
        $sql = "SELECT username FROM users WHERE userid = :userid";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':userid',$userid,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        return (!empty($result)) ? $result['username']: null;
    }

    //useridの重複チェック
    public function is_exist_user(string $userid):bool{
        $sql = "SELECT COUNT(userid) as count FROM users WHERE userid = :userid";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':userid',$userid,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        return ($result['count'])? true : false;
    }
}