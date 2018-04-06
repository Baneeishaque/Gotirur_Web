<?php
include_once 'config.php';
$sql = "select * from parent_categories";
$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option>' . $row['category_name'] . '</option>';

    $sql2 = "select * from child_categories where parent_category_id=" . $row['id'];

    $result2 = $con->query($sql2);
    while ($row2 = mysqli_fetch_assoc($result2)) {
      
        $sql3 = "select * from grantchild_category where child_category_id=" . $row2['id'];
        $result3 = $con->query($sql3);

        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo '<option>' . $row['category_name'] . '/' . $row3['category_name'] . '</option>';
        }
        
    }
 
}
