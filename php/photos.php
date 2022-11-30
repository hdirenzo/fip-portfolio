<?php

// Set the content type to tell the browser that we are responding with JSON content (not text)
header('Content-Type: application/json');

$user = 'root';
$password = 'root';
$db = 'db_photos';
$host = 'localhost';
$port = 8889;

// Open connection to the database
$connection = mysqli_connect($host, $user, $password, $db, $port);

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
