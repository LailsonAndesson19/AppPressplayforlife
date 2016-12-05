<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$hostname = "localhost";
$database = "inter";
$username = "root";
$password = "";

$conexao = mysql_connect($hostname,$username,$password) or die ("Dados de conexão com servidor inválidos!");
mysql_select_db($database);
		
?>