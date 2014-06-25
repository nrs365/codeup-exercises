<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=address_book_db', 'nicole', 'bakagaki');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

//making table for todo_db
$query = 'CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(150) NOT NULL,
    last_name VARCHAR(150) NOT NULL,
    street_address VARCHAR(150) NOT NULL,
    city VARCHAR(150) NOT NULL,
    zip INT(5) NOT NULL,
    phone_number INT(11),
    PRIMARY KEY (id)
)';

// // // // Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);
?>