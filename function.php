<?php
function ConDB(){
	mysql_connect("localhost","root","1234") or die(mysql_error());
	mysql_select_db("baanmelanie") or die(mysql_error());
	mysql_query("SET NAMES UTF8");
}

function chkBrowser($nameBroser){  
    return preg_match("/".$nameBroser."/",$_SERVER['HTTP_USER_AGENT']);  
} 
?>