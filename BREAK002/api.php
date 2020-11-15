<?php
//日時の取得
$current_day = date('Y/m/d');

//星占いデータのURL
$horoscope_url = 'http://api.jugemkey.jp/api/horoscope/free/'.$current_day;

//ファイルを取得
$horoscope_json = file_get_contents($horoscope_url);

//文字コードの変換
$horoscope_json = mb_convert_encoding($horoscope_json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

//連想配列に変換
$horoscope_array = json_decode($horoscope_json,true);

var_dump($horoscope_array);