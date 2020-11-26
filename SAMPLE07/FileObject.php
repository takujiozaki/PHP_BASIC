<?php

class FileObject{
    
    private $filename;

    public function __construct(){
        $this->filename = 'status.txt';
    }

    public function read(){
        $fp = fopen($this->filename,'r');
        $status = fread($fp,8192);
        fclose($fp);
        if($status!=""){
            return "開店中";
        }else{
            return "準備中";
        }
    }

    public function clear(){
        $fp = fopen($this->filename,'w');
        fwrite($fp,"");
        fclose($fp);
    }
    
    public function write(){
        $fp = fopen($this->filename,'w');
        fwrite($fp,"1");
        fclose($fp);
    }
}
