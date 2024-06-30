<?php
include ('../../../conf/config.php');
date_default_timezone_set('Asia/Jakarta');
$datetime = date('Y-m-d H:i:s');
$id = $_GET['id'];
$part_name = $_GET['part_name'];
$part_type = $_GET['part_type'];
$maker = $_GET['maker'];
$std_stock = $_GET['std_stock'];
$qty_stock = $_GET['qty_stock'];
$price = $_GET['price'];
$dept_before = $_GET['dept_before'];
$plant_before = $_GET['plant_before'];
$address = $_GET['address'];
$qty_take = $_GET['qty_take'];
$qty_after = $qty_stock - $qty_take;
$total_price = $qty_take * $price;
$dept_after = $_GET['dept_after'];
$plant_after = $_GET['plant_after'];
$remark = $_GET['remark'];
//$query = mysqli_query ($koneksi,"INSERT INTO tb_record (id,part_name,part_type,maker,std_stock,qty_stock,price,dept_before,plant_before,address,qty_take,total_price,dept_after,plant_after,remark) VALUES ('', '$part_name', '$part_type', '$maker', '$std_stock', '$qty_stock', '$price', '$dept_before', '$plant_before', '$address','$qty_take','$total_price', '$dept_after', '$plant_after', '$remark')");
//$query = mysqli_query ($koneksi,"UPDATE tb_inventory SET qty_stock='$qty_after' WHERE id='$id'");


//$mysqli = new mysqli('localhost','root','','db_inventory');

// create string of queries separated by ;
$query  = "INSERT INTO tb_rec_req (id,`datetime`,part_name,part_type,maker,std_stock,qty_stock,price,dept_before,plant_before,`address`,qty_take,total_price,dept_after,plant_after,remark) VALUES ('', '$datetime', '$part_name', '$part_type', '$maker', '$std_stock', '$qty_stock', '$price', '$dept_before', '$plant_before', '$address','$qty_take','$total_price', '$dept_after', '$plant_after', '$remark');";
$query .= "UPDATE tb_inventory SET qty_stock='$qty_after' WHERE id='$id';";

// execute query - $result is false if the first query failed
$result = mysqli_multi_query($koneksi, $query);

if ($result) {
    do {
        // grab the result of the next query
        if (($result = mysqli_store_result($koneksi)) === false && mysqli_error($koneksi) != '') {
            echo "Query failed: " . mysqli_error($koneksi);
        }
    } while (mysqli_more_results($koneksi) && mysqli_next_result($koneksi)); // while there are more results
} else {
    echo "First query failed..." . mysqli_error($koneksi);
}
header('Location: ../../index.php?pages=req');
?>