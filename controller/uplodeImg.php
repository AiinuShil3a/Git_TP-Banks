<?php
// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../datauplode/" . $filename;

    $obj = new Bank();
    $rs2 = $obj->Image($filename);

    if (move_uploaded_file($tempname, $folder)) {
        
    } else {
        include "../view/alertInput.php";
    }
}
