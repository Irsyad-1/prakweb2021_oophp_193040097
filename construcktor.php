<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0" ){
               $this->judul = $judul;
               $this->penulis = $penulis;
               $this->penerbit = $penerbit;
               $this->harga = $harga;
           }

           public function getLabel(){
               return "$this->penulis, $this->penerbit";

           }
}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new produk("uncharted", "Neil Druckman", "Sony Computer", 25000);
$produk3 = new produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);