<?php

define("DBHOST",'localhost'); 
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","cars");

$conn = @mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);