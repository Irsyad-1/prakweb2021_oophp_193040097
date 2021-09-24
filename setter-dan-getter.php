<?php

class Produk {
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

           public function setjudul( $judul ) {
                $this->judul = $judul;
           }

           public function getjudul() {
               return $this->judul;

           }

           public function setpenulis($penulis) {
               $this->penulis = $penulis;
           }

           public function getpenulis() {
               return $this->penulis;
           }

           public function setpenerbit() {
               $this->penerbit = $penerbit;
           }

           public function setdiskon( $diskon) {
            $this->diskon = $diskon;
           }

           public function getdiskon() {
               return $this->diskon;
           }


           public function getpenerbit() {
               return $this->penerbit;
           }

           public function setharga() {
               $this->harga = $harga;
           }

           public function getharga() {
            return $this->harga - ( $this->harga * $this->diskon / 100);
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
    public $jmlhalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlhalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlhalaman = $jmlhalaman;
    }
    
    public function getinfoproduk() {
        $str = "Komik : ". parent::getinfoproduk() ." - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class game extends Produk {
    public $waktumain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $waktumain = 0  ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }

    
    public function getinfoproduk() {
        $str = "Game : ". parent::getinfoproduk() ." - {$this->waktumain} Jam.";
        return $str;
    }

}

class CetakInfoproduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100,);
$produk2 = new Game("uncharted", "Neil Druckman", "Sony Computer", 25000,50,);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";

$produk2->setdiskon(50);
echo $produk2->getharga();
echo "<hr>";

$produk1->setpenulis("ichan");
echo $produk1->getpenulis();