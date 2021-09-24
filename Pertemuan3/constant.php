<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_oophp_193040091
Pertemuan3
Mengerjakan dan Mempelajari Constant
25 September 2021
*/

/*define('NAMA', 'Tengku Muhammad Rafi');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;
*/


/*class Coba{
    const NAMA = 'Tengku';
}

echo Coba::NAMA;
*/

//echo __FILE__;

/*function coba() {
    return __FUNCTION__;
}
echo coba();
*/


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;




?>
