<?php
class Produk {                     //ini class
    public $judul,      //ini property
           $penulis,
           $penerbit,  
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this-> penulis= $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;  
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {                    //ini method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }

};


class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Stevani Budiarta", "shonen jump", 300000, 100, 0, "Komik");                    //ini object

$produk2 = new Produk( "COC", "SUPERCELL", "SUPERCELL", 350000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "</br>";
echo $produk2->getInfoLengkap();
