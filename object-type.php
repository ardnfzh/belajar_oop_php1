<?php
class Produk {                     //ini class
    public $judul,      //ini property
           $penulis,
           $penerbit,  
           $harga;

    public function __construct( $judul, $penerbit, $penulis, $harga) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;  
    }

    public function getLabel() {                    //ini method
        return "$this->penerbit, $this->penulis";
    }

};


class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new Produk("Love silent", "Stevani Budiarta", "Stevani", 300000);                    //ini object

$produk2 = new Produk( "Matemmatika", "Iman santoso", "Iman", 350000);


echo "Novel : " . $produk1->getLabel();
echo "</br>";
echo "Buku : " . $produk2->getLabel();
echo "</br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);