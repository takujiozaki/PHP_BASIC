<?php

function read_file($file){
    //ファイルを開く
    $fp = fopen($file,'a+');
    //ファイルを読む
    $flg = fread($fp, 8192);
    //ファイルを閉じる
    fclose($fp);
    return $flg;
}

function clear_file($file){
    //ファイルを開く(ファイルをいったん空に)
    $fp = fopen($file,'w');
    //空白を書き込む
    fwrite($fp,"");
    //ファイルを閉じる
    fclose($fp);
}

function write_file($file){
    //ファイルを開く(ファイルをいったん空に)
    $fp = fopen($file,'w');
    //1を書き込む
    fwrite($fp,"1");
    //ファイルを閉じる
    fclose($fp);
}