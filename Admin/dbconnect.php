<?php

$connect = mysqli_connect("us-cdbr-east-05.cleardb.net", "b11b3753f02118", "d7841481", "heroku_be3cf3b2e580396");
//CHECK CONNECTION
if (!$connect) {
    die('could not connect to server' . mysqli_error($connect));
}
if (mysqli_connect_errno()) {
    echo "failed to connect to MYSQL:" . mysqli_connect_error();
}
