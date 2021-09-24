<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_oophp_193040091
Pertemuan3
Mengerjakan dan Mempelajari Inheritance Bagian 2
24 September 2021
*/

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
          

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
   
    public function getInfoProduk(){
         //Komik : Detective Conan | Gosho Aoyama, Shogakukan (Rp. 30000)- 100 Halaman.
         $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
         return $str;
    }
}


class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str; 
    }
}



class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Komik("Detective Conan", "Gosho Aoyama", "Shogakukan", 30000, 100, 0);
$produk2 = new Game("Assassin's Creed IV Black Flag", "Darby McDevitt", "Ubisoft", 450000, 0, 90);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

//Komik : Detective Conan | Gosho Aoyama, Shogakukan (Rp. 30000)- 100 Halaman
//Game : Assassin's Creed IV Black Flag | Gosho Aoyama, Ubisoft (Rp. 450000) ~ 90 Jam

