<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain;

           public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
           $harga = 0, $jmlhalaman = 0, $waktumain = 0){
               $this->judul = $judul;
               $this->penulis = $penulis;
               $this->penerbit = $penerbit;
               $this->harga = $harga;
               $this->jmlhalaman = $jmlhalaman;
               $this->waktumain = $waktumain;
           }

           public function getLabel(){
               return "$this->penulis, $this->penerbit";

           }
           public function getinfoproduk() {
               $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

               return $str;
               
           }
}

class Komik extends Produk {
    public function getinfoproduk() {
        $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class game extends Produk {
    public function getinfoproduk() {
        $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktumain} Jam.";
        return $str;
    }

}

class CetakInfoproduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0,);
$produk2 = new Game("uncharted", "Neil Druckman", "Sony Computer", 25000, 0, 50,);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();