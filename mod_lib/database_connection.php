<?php

/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'applabsd_dev123');
DEFINE('DATABASE_PASSWORD', '1Z414H=4gI~[2]m');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'applabsd_carcrazee');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);

if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>