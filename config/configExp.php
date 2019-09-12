<?php 
$exp=$userInfo['exp'];
    
if ($exp < 150) {
   $lvl =1;
} elseif ($exp <225) {
    $lvl = 2;
} elseif ($exp < 337) {
    $lvl = 3;
} elseif ($exp < 506) {
    $lvl = 4;
} elseif ($exp < 759) {
    $lvl = 5;
} elseif ($exp < 1139) {
    $lvl = 6;
} elseif ($exp < 1708) {
    $lvl = 7;
} elseif ($exp <  25662) {
    $lvl = 8;
} elseif ($exp < 3844) {
    $lvl = 9;
} elseif ($exp < 5766) {
    $lvl = 10;
}
$maxVlm ;

if ($lvl <= 1) {
   $maxVlm = 150;
} elseif ($lvl <= 2) {
    $maxVlm = 225;
} elseif ($lvl <= 3) {
    $maxVlm = 337;
} elseif ($lvl <= 4) {
    $maxVlm = 506;
} elseif ($lvl <= 5) {
    $maxVlm = 759;
} elseif ($lvl <= 6) {
    $maxVlm = 1139;
} elseif ($lvl <= 7) {
    $maxVlm = 1708;
} elseif ($lvl <=  8) {
    $maxVlm = 25662;
} elseif ($lvl <= 9) {
    $maxVlm = 3844;
} elseif ($lvl <= 10) {
    $maxVlm = 5766;
}

$prcntVlm = (100*$exp)/$maxVlm;
$nxtLvl = $maxVlm-$exp;
