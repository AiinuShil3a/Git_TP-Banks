<?php
class Bank{
    public function Banking($Banks,$money)
    {

        if($Banks && $money){
            return true;
        }else {
            return false;
        }

    }

    public function Image($filename)
    {

        if($filename){
            return $filename;
        }else {
            return false;
        }

    }
}
?>