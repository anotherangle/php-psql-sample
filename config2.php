<?php
   $host        = "host = ";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user =  password=";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
