<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rem = "localhost";
$database_rem = "formulario";
$username_rem = "root";
$password_rem = "";
$rem = mysql_pconnect($hostname_rem, $username_rem, $password_rem) or trigger_error(mysql_error(),E_USER_ERROR); 
?>