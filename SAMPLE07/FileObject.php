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
        return $status;
    }
}