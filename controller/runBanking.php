<?php
    $Banks = $_POST['Banks'];
    $money = $_POST['money'];
    
    include_once '../model/Function.php';
        $obj = new Bank();
        $rs = $obj->Banking($Banks,$money);
    if($Banks == "131-1-00001-6" && $money == $money){
        $nameBanks = "กรุงศรีอยุธยา";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }elseif($Banks == "023-1-19265-7" && $money == $money){
        $nameBanks = "กรุงไทย";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }elseif($Banks == "011-2-25379-3" && $money == $money){
        $nameBanks = "กสิกรไทย";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }elseif($Banks == "152-0-00001-7" && $money == $money){
        $nameBanks = "กรุงเทพ";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }elseif($Banks == "045-2-35809-1" && $money == $money){
        $nameBanks = "ไทยพาณิชย์";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }elseif($Banks == "238-2-11007-6" && $money == $money){
        $nameBanks = "ทีเอมบีธนาชาติ";
        include "uplodeImg.php";
        include "../view/showHomepage.php";
    }
?>