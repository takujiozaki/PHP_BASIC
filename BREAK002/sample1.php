<?php
/**
 * 基本の占いプログラム
 */
$fortune = array("吉", "中吉", "大吉", "凶");
$index = rand(0,3);
echo $fortune[$index],PHP_EOL;