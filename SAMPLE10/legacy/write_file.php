<?php

    $file = 'status.txt';

    //ファイルを開く(ファイルをいったん空に)
    $fp = fopen($file,'w');
    //
    fwrite($fp,"1");
    fclose($fp);
    //redirect
    header('location:./');