<?php
include ('../../../conf/config.php');
date_default_timezone_set('Asia/Jakarta');
$datetime = date('Y-m-d H:i:s');
$part_name = $_GET['part_name'];
$part_type = $_GET['part_type'];
$maker = $_GET['maker'];
$std_stock = $_GET['std_stock'];
$qty_stock = $_GET['qty_stock'];
$price = $_GET['price'];
$dept = $_GET['dept'];
$plant = $_GET['plant'];
$address = $_GET['address'];
$remark = $_GET['remark'];
$action = 'NEW';

//$query = mysqli_query ($koneksi,"INSERT INTO tb_inventory (id,part_name,part_type,maker,std_stock,qty_stock,price,dept,plant,address) VALUES ('', '$part_name', '$part_type', '$maker', '$std_stock', '$qty_stock', '$price', '$dept', '$plant', '$address')");
// create string of queries separated by ;
$query  = "INSERT INTO tb_inventory (id,part_name,part_type,maker,std_stock,qty_stock,price,dept,plant,`address`) VALUES ('', '$part_name', '$part_type', '$maker', '$std_stock', '$qty_stock', '$price', '$dept', '$plant', '$address');";
$query .= "INSERT INTO tb_rec_update (id, `datetime`, part_name_bef, part_type_bef, maker_bef, std_stock_bef, qty_stock_bef, price_bef, dept, plant, address_bef, `action`, remark, part_name_aft, part_type_aft, maker_aft, std_stock_aft, qty_stock_aft, price_aft, address_aft) VALUES ('', '$datetime', '$part_name','$part_type','$maker','$std_stock','$qty_stock','$price','$dept', '$plant', '$address', '$action', '$remark','', '', '', '', '', '', '');";

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

header('Location: ../../index.php?pages=update');
?>