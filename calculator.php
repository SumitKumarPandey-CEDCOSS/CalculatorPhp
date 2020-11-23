<?php 
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Sumit kumar Pandey <pandeysumit399@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training/php%20task%202/html/products.php
 */
global $result;
$num = $_REQUEST['number'];
$opt = $_REQUEST['opt'];
$result = $_REQUEST['result'];

if ($result=="") {
    $result=$num;
} else {
    $result=cal($num, $opt, $result);
}
echo $result;

function cal($a, $b, $c) 
{
    if ($b =="+" and $a != '') { 
        $result=$c+$a;
        return $result;
    } elseif ($b =="-" and $a != '') { 
        $result=$c-$a;
        return $result;
    } elseif ($b =="*" and $a != '') { 
        $result=$c*$a;
        return $result;
    } elseif ($b =="/" and $a != '') { 
        $result=$c/$a;
        return $result;
    } elseif ($b=="=" and $a != '') {
        $result=$c;
        return $result;
    }
    return $c;
}
?>