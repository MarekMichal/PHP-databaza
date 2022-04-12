<?php
include('./connection.php');

$sql = "SELECT * FROM users";
$result = $link->query($sql);
$users = [];

while ($user = $result->fetch_assoc()) {
    array_push($users, $username);
}
