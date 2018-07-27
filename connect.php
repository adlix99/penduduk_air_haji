<?php

$db = new mysqli('localhost', 'root','', 'nagari');
	if ($db->connect_errno > 0) 
	{
	    die("connecting failed");
	}
	
?>