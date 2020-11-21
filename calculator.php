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
$num = $_REQUEST['number'];
$opt = $_REQUEST['opt'];
$result = $_REQUEST['result'];

if ($result=="") {
    $result=$num;
} else {
    $result=cal($num, $opt, $result);
}
echo $result;

function cal(int $a, $b, int $c) 
{
    if ($b =="+") { 
        $result=$a+$c;
        return $result;
    } elseif ($b =="-") { 
        $result=$a-$c;
        return $result;
    } elseif ($b =="*") { 
        $result=$a*$c;
        return $result;
    } elseif ($b =="/") { 
        $result=$a/$c;
        return $result;
    }
    
}

?>