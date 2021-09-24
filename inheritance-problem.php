<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

           public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
           $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe = "tipe"){
               $this->judul = $judul;
               $this->penulis = $penulis;
               $this->penerbit = $penerbit;
               $this->harga = $harga;
               $this->jmlhalaman = $jmlhalaman;
               $this->waktumain = $waktumain;
               $this->tipe = $tipe;
           }

           public function getLabel(){
               return "$this->penulis, $this->penerbit";

           }
           public function getinfolengkap() {
               $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

               if( $this->tipe == "Komik") {
                   $str .= " - {$this->jmlhalaman} Halaman.";
               }else if( $this->tipe == "game") {
                   $str .= " - {$this->waktumain} Jam.";     
               }

               return $str;
               
           }
}


class CetakInfoproduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("uncharted", "Neil Druckman", "Sony Computer", 25000, 0, 50, "game");


echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();