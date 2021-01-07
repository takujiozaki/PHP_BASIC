<?php


class FiLeManager
{
    private $flg;
    private $filename = 'status.txt'; 

    public function __construct()
    {
        $this->flg = false;
    }

    public function getStatus():bool{
        //ファイルを開く
        $fp = fopen($this->filename,'a+');
        //ファイルを読む
        $result = fread($fp, 8192);
        //ファイルを閉じる
        fclose($fp);
        $flg = false;
        if($result){
            $flg = true;
        }
        return $flg;
    }

    public function close():void{
        //ファイルを開く(ファイルをいったん空に)
        $fp = fopen($this->filename,'w');
        //空白を書き込む
        fwrite($fp,"");
        //ファイルを閉じる
        fclose($fp);
    }

    public function open():void{
        //ファイルを開く(ファイルをいったん空に)
        $fp = fopen($this->filename,'w');
        //空白を書き込む
        fwrite($fp,"1");
        //ファイルを閉じる
        fclose($fp);
    }

}