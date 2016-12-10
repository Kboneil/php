<?php

// $db = new PDO('pgsql:dbname=slogans;host=localhost;user=kboneil');
//
// $res = $db->query(  "SELECT * FROM comments" )->fetchAll(PDO::FETCH_ASSOC);
//
// if (!$res) {
//
//     die("Error in query: " . pg_last_error());
//
// }
//
// echo $res;

//connect to DB
$db = pg_connect("host=localhost dbname=slogans user=kboneil");
if (!$db) {

    die("Error in connection: " . pg_last_error());

}

?>
