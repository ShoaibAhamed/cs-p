<?php
session_start();
include('./data_management/connectdb.php');
include ('./populate/populate.php');

$catid = $_POST['cat'];   // department id

$sql = "SELECT item_id,field FROM item WHERE department=".$catid." ORDER BY field";

$result = mysqli_query($link,$sql);

$cat_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $itemid = $row['item_id'];
    $field = $row['field'];

    $cat_arr[] = array("item_id" => $itemid, "field" => $field);
}

// encoding array to json format
echo json_encode($cat_arr);

?>