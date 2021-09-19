<?php

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

           public function getLabel(){
               return "$this->penulis, $this->penerbit";

           }
}

// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahproperty = "dibuat";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = "30000";


$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();