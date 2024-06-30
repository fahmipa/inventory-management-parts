<?php
include ('../../../conf/config.php');
date_default_timezone_set('Asia/Jakarta');
$datetime = date('Y-m-d H:i:s');
$id = $_GET['id'];
$part_name_aft = $_GET['part_name'];
$part_type_aft = $_GET['part_type'];
$maker_aft = $_GET['maker'];
$std_stock_aft = $_GET['std_stock'];
$qty_stock_aft = $_GET['qty_stock'];
$price_aft = $_GET['price'];
$dept = $_GET['dept'];
$plant = $_GET['plant'];
$address_aft = $_GET['address'];
$remark = $_GET['remark'];


$query = mysqli_query($koneksi,"SELECT * FROM tb_inventory WHERE id='$id'");
if(mysqli_num_rows($query)==1){
	$before = mysqli_fetch_array($query);
	$part_name_bef = $before['part_name'];
    $part_type_bef = $before['part_type'];
    $maker_bef = $before['maker'];
    $std_stock_bef = $before['std_stock'];
    $qty_stock_bef = $before['qty_stock'];
    $price_bef = $before['price'];
    $address_bef = $before['address'];
    $action = 'EDITED';
    $query  = "INSERT INTO tb_rec_update (id, `datetime`, part_name_bef, part_type_bef, maker_bef, std_stock_bef, qty_stock_bef, price_bef, dept, plant, address_bef, `action`, remark, part_name_aft, part_type_aft, maker_aft, std_stock_aft, qty_stock_aft, price_aft, address_aft) VALUES ('', '$datetime', '$part_name_bef','$part_type_bef','$maker_bef','$std_stock_bef','$qty_stock_bef','$price_bef','$dept', '$plant', '$address_bef', '$action', '$remark','$part_name_aft', '$part_type_aft', '$maker_aft', '$std_stock_aft', '$qty_stock_aft', '$price_aft', '$address_aft');";
    $query .= "UPDATE tb_inventory SET part_name='$part_name_aft', part_type='$part_type_aft', maker='$maker_aft', std_stock='$std_stock_aft', qty_stock='$qty_stock_aft', price='$price_aft', dept='$dept', plant='$plant', address='$address_aft' WHERE id='$id';";
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
}

header('Location: ../../index.php?pages=adm-update');
?>