<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 11/03/2016
 * Time: 11:12 AM
 */
$conn_error='could not connect to database';

$mysql_host='localhost';
$name='root';
$mysql_pass='';
$mysql_db='mis-project';

if(!mysql_connect($mysql_host,$name,$mysql_pass)||!mysql_select_db($mysql_db)) {


    echo '<script>alert("Could not Connect to database!");</script>';
    die();

}
?>