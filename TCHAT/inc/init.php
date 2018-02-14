<?php

$pdo = new PDO('mysql:host=localhost;dbname=tchat','root','', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

));

session_start();

$msg = '';


function age($naiss)
{
    list($y, $m, $d ) = explode('-',$naiss);
    $m = date('m') - $m ;
    if ( $m < 0 )
    {
        $y++; 
    }
    elseif ( $m == 0 && ( date('d') - $d < 0) )
    {
        $y++;
    }
    return date('Y') - $y;

}
?>