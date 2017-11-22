<?php
ini_set('display_errors', 'On');

$GLOBALS['dbServer'] = "db";      // this is set in docker-compose.yml
$GLOBALS['dbUser']   = "root";
$GLOBALS['dbPwd']    = "river7";
$GLOBALS['dbName'] = "test78";


$sql = "SELECT * FROM testtab";

$mysqli = new mysqli($GLOBALS['dbServer'], $GLOBALS['dbUser'],
    $GLOBALS['dbPwd'], $GLOBALS['dbName']);
$rows = $mysqli->query($sql);
$mysqli->close();

while ($row=mysqli_fetch_array($rows)) {
    print_r($row);
    echo "<br />\n";
}

?>

