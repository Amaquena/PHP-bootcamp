<?php
if ($_GET['action'] == "set")
{
	setcookie($_GET['name'], $_GET['value']);
}
if ($_GET['action'] == "get")
{
	echo $_COOKIE[$_GET['name']];
}
if ($_GET['action'] == "del")
{
	setcookie($_GET['name'], $_GET['value'], time() - 1);
}
?>