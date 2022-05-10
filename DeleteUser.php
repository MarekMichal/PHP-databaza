<?php
include('../Cpnnection.php');

$sql = "DELETE * FROM users WHERE id=".$_GET['id'];
$result = $conn->query($sql);
$user = null;

if($result->num_rows == 1){
    while($u = $result->fetch_assoc()){
        $user = $u;
    }
}
