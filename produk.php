<?php

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";
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

echo "Komik : $produk3->penulis, $produk3->penerbit";