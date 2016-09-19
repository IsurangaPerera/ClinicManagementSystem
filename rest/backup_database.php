<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Tally456';
$dbname = 'chestclinic';
  
$backup_file = '../backup/'.$dbname . date("Y-m-d-H-i-s") . '.sql';
$command = "mysqldump --opt -h $dbhost -u $dbuser -p$dbpass ". "chestclinic > $backup_file";
   
system($command);

?>