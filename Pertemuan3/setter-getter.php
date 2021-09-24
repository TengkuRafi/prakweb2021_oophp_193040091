<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_oophp_193040091
Pertemuan3
Mengerjakan dan Mempelajari Setter dan Getter
25 September 2021
*/

class Produk{
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;


  

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setpenulis( $penulis ){
        $this->penulis = $penulis;
    }
    
    public function getPenulis(){
        return $this->penulis;
    }
    
    public function setpenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }
    
    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->Diskon;
    }


    public function setharga( $harga ){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon/ 100 );
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
    
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk(){
        $str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain =$waktuMain;
    }

    
    

    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk()." - {$this->waktuMain} Jam.";
        return $str; 
    }
}



class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Komik("Detective Conan", "Gosho Aoyama", "Shogakukan", 30000, 100);
$produk2 = new Game("Assassin's Creed IV Black Flag", "Darby McDevitt", "Ubisoft", 450000, 90);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setpenulis("Tengku Muhammad Rafi");
echo $produk1->getPenulis();

