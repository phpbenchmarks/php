<?php
require('config.php');

/**
 * @param string $message
 */
function error_500($message)
{
    header('HTTP/1.1 500 Internal Server Error');
    exit($message);
}

/**
 * @param mysqli $mysqli
 * @param int $line
 */
function show_mysqli_error(mysqli $mysqli, $line)
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
    INSERT INTO bench_crud (firstName, lastName, email, message)
    VALUES ('Steevan', 'BARBOYON', 'steevan.barboyon@gmail.com', 'php-benchmarks, the first php benchmarks site !')
");
show_mysqli_error($mysqli, __LINE__);
$id = $mysqli->insert_id;

// read
$mysqli->query('SELECT * FROM bench_crud WHERE id = ' . $id);
show_mysqli_error($mysqli, __LINE__);

// update
$mysqli->query("
    UPDATE bench_crud
    SET firstName = 'InfoDroid', lastName = 'InfoDroid', email = 'contact@info-droid.fr', message = 'php-benchmarks, the ultimate php benchmarks site !'
    WHERE id = " . $id
);
show_mysqli_error($mysqli, __LINE__);

// delete
$mysqli->query('DELETE FROM bench_crud WHERE id = ' . $id);
show_mysqli_error($mysqli, __LINE__);

$mysqli->close();
