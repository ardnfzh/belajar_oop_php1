<?php
class Produk {                     //ini class
    public $judul = "Novel",      //ini property
           $penulis = "Penulis",
           $penerbit = "Penerbit",  
           $harga = 00000;

    public function getLabel() {                    //ini method
        return "$this->judul, $this->penerbit";
    }

};

$produk1 = new Produk();                    //ini object
$produk1->judul = "Love silent";
$produk1->penulis = "Stevani Budiarta";
$produk1->penerbit = "Stevani Budiarta";
$produk1->harga = 30000;


$produk2 = new Produk();
$produk2->judul = "Matemmatika";
$produk2->penulis = "Iman santoso";
$produk2->penerbit = "Iman santoso";
$produk2->harga = 35000;


echo "Novel : " . $produk2->getLabel();
echo "</br>";
echo "Seharga : $produk2->harga";
echo "</br>";
echo "</br>";
echo "Buku : " . $produk1->getLabel();
echo "</br>";
echo "Seharga : $produk1->harga";
echo "</br>";