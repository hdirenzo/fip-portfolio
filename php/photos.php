<?php

// Set the content type to tell the browser that we are responding with JSON content (not text)
header('Content-Type: application/json');

$user = 'root';
$password = 'MochaBella123!';
$db = 'db_photos';
$host = 'localhost';
$port = 8889;
// $host = 'db5011037397.hosting-data.io';
//   $db = 'dbs9328608';
//   $user = 'dbu1321714';
//   $password = 'MochaBella123!';
// $port = 3306;


// Open connection to the database
$connection = mysqli_connect($host, $user, $password, $db, $port);
// $connection = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE'], $_ENV['DB_PORT']);

if (!$connection) {
    die("Could not connect to MySQL!");
}

// Query photos table
$query_result = mysqli_query($connection, 'SELECT * FROM tb_photos');

$rows = [];

// Iterate over the results set until there are no more (each mysqli_fetch_array() pulls one row at a time)
while ($row = mysqli_fetch_array($query_result, MYSQLI_ASSOC)) {
    // printf("%s (%s)\n", $row["file_name"], $row["alt_text"]);
    $rows[] = $row;
}

// Transform the array of rows into a JSON string
$json = json_encode($rows);
// var_dump($json);
echo $json;
