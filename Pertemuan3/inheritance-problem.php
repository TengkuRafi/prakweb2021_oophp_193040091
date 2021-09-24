<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_oophp_193040091
Pertemuan3
Mengerjakan dan Mempelajari Inheritance
24 September 2021
*/

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
   
    public function getInfoLengkap(){
         //Komik : Detective Conan | Gosho Aoyama, Shogakukan (Rp. 30000)- 100 Halaman.
         $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
         if( $this->tipe == "Komik" ){
             $str .= " - {$this->jmlHalaman} Halaman.";
         } else if( $this->tipe == "Game"){
             $str .= " ~ {$this->waktuMain} Jam.";
         }
         return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Produk("Detective Conan", "Gosho Aoyama", "Shogakukan", 30000, 100, 0, "Komik");
$produk2 = new Produk("Assassin's Creed IV Black Flag", "Darby McDevitt", "Ubisoft", 450000, 0, 90, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

//Komik : Detective Conan | Gosho Aoyama, Shogakukan (Rp. 30000)- 100 Halaman
//Game : Assassin's Creed IV Black Flag | Gosho Aoyama, Ubisoft (Rp. 450000) ~ 90 Jam

