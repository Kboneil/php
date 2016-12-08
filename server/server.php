<?php

$dbh = pg_connect("host=localhost dbname=slogans user=kboneil");
if (!$dbh) {

    die("Error in connection: " . pg_last_error());

}

$sql = "SELECT * FROM slogans";

$result = pg_query($dbh, $sql);

if (!$result) {

    die("Error in query: " . pg_last_error());

}

while ($row = pg_fetch_array($result)) {

    echo "Slogan: " . $row[0] . "<p />";

    echo $row[1] . "<p />";

    echo $row[2] . "<p />";

}

?>
