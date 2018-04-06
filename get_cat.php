<?php
include_once 'config.php';
$sql = "SELECT * FROM `parent_categories`";
//echo $sql;
$result = $con->query($sql);
 while ($row = mysqli_fetch_assoc($result)) {
     echo '<li role="presentation"><a role="menuitem" tabindex="-1" >'.$row['category_name'].'</a></li>';
 }

