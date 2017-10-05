<?php

declare(strict_types=1);

require('config.php');

function error_500(string $message): void
{
    header('HTTP/1.1 500 Internal Server Error');
    exit($message);
}

function show_mysqli_error(mysqli $mysqli, int $line): void
{
    if ($mysqli->error) {
        error_500('[' . $line . '] ' . $mysqli->error);
    }
}

$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_error) {
    error_500($mysqli->connect_error);
}

// create
$mysqli->query("
    INSERT INTO crud (firstName, lastName, email, message)
    VALUES ('Steevan', 'BARBOYON', 'steevan.barboyon@gmail.com', 'php-benchmarks, the first php benchmarks site !')
");
show_mysqli_error($mysqli, __LINE__);
$id = $mysqli->insert_id;

// read
$mysqli->query('SELECT * FROM crud WHERE id = ' . $id);
show_mysqli_error($mysqli, __LINE__);

// update
$mysqli->query("
    UPDATE crud
    SET firstName = 'InfoDroid', lastName = 'InfoDroid', email = 'contact@info-droid.fr', message = 'php-benchmarks, the ultimate php benchmarks site !'
    WHERE id = " . $id
);
show_mysqli_error($mysqli, __LINE__);

// delete
$mysqli->query('DELETE FROM crud WHERE id = ' . $id);
show_mysqli_error($mysqli, __LINE__);

$mysqli->close();
