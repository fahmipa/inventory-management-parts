<?php
$pages = @$_GET['pages'];
if ($pages=="req") {
    include "pages/Inventory/req.php";
}
if ($pages=="update") {
    include "pages/Inventory/update.php";
}
if ($pages=="take") {
    include "pages/Inventory/take.php";
}
if ($pages=="edit") {
    include "pages/Inventory/edit.php";
}
if ($pages=="rec-req") {
    include "pages/Inventory/rec-req.php";
}
if ($pages=="rec-update") {
    include "pages/Inventory/rec-update.php";
}
if ($pages=="adm-update") {
    include "pages/Inventory/adm_update.php";
}
if ($pages=="adm_edit") {
    include "pages/Inventory/adm_edit.php";
}
if ($pages=="adm-rec-req") {
    include "pages/Inventory/adm-rec-req.php";
}
if ($pages=="adm-rec-update") {
    include "pages/Inventory/adm-rec-update.php";
}
if ($pages=="adm-rec-login") {
    include "pages/Inventory/adm-rec-login.php";
}
if ($pages=="adm-user") {
    include "pages/Inventory/adm-user.php";
}
?>