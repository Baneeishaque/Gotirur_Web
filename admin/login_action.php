<?php

include_once 'config.php';
$sql = "SELECT `username`, `password` FROM `admin` WHERE `username`='" . $_GET['username'] . "' AND `password`='" . $_GET['password'] . "'";
//echo $sql;
$result = $con->query($sql);
if (mysqli_num_rows($result) == 0) {
    echo '<script>alert("Error...")</script>';
    echo '<script>window.location="index.php"</script>';
} else {
    echo '<script>window.location="home.php"</script>';
}
