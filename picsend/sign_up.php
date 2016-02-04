<?php
$link = mysql_connect('localhost', 'root', '19884325');
if(!$link)
{
	echo "connect didn't work";
}
if(!mysql_select_db('picsend', $link)){
	echo "selecting db didn't work";
}
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
echo $firstname;
echo $lastname;
$sql = "INSERT INTO `users` VALUES (NULL, '".$firstname."', '".$lastname."')";
echo $sql;
if(!mysql_query($sql))
{
	echo "mysql query didn't work";
}
 ?>