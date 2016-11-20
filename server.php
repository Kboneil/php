<?php
   $host        = "host=localhost";
   $port        = "port=8000";
   $dbname      = "dbname=slogans";

   $db = pg_connect( "$host $port $dbname" );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   echo "connected";
?>
