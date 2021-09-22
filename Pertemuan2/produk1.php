<?php

/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_oophp_193040091
Pertemuan2
Mengerjakan dan Mempelajari Class & Object
22 September 2021
*/

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new Produk(); 
//$produk1->judul = 'OnePiece';
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = 'God Of War';
//$produk2->tambahProperty = 'hahahhaha';
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Detective Conan";
$produk3->penulis = "Gosho Aoyama";
$produk3->penerbit = "Shogakukan";
$produk3->harga = 30000;


//echo "Komik : $produk3->penulis, $produk3->penerbit";
//echo "<br>";
//echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Assassin's Creed IV Black Flag";
$produk4->penulis = "Darby McDevitt";
$produk4->penerbit = "Ubisoft";
$produk4->harga = 450000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

