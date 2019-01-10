<?php 

class Produk {
	public $judul, 
		   $penulis, 
		   $penerbit, 
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $jmlHalaman = 0, $waktuMain= 0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// Komik : Jomblo Happy | Dewi Ratna, PT.PERSADA (Rp. 25000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if( $this->tipe == "Game" ) {
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Jomblo Happy", "Dewi Ratna", "PT.PERSADA", 25000, 100, 0, "Komik");
$produk2 = new Produk("Super Mario", "Dewi Ratna", "PT.PERSADA", 300000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

