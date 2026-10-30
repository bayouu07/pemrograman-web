
<?php

class Produk
{
    // Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;

        echo "Objek produk berhasil dibuat!<br><br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "<br><br>Objek produk " . $this->nama . " telah dihapus.";
    }

    // Method menghitung total harga
    public function hitungTotalHarga()
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // Static Method mengambil pajak
    public static function getPajak()
    {
        return self::PAJAK;
    }

    // Method menampilkan produk
    public function tampilkanProduk()
    {
        echo "Produk: " . $this->nama . "<br>";

        echo "Harga: Rp" .
            number_format($this->harga, 0, ',', '.') . "<br>";

        echo "Stok: " . $this->stok . "<br>";

        echo "Pajak: " .
            (self::getPajak() * 100) . "%<br><br>";

        echo "Total harga setelah pajak: Rp" .
            number_format($this->hitungTotalHarga(), 0, ',', '.');
    }
}

// Membuat objek produk
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Memanggil method
$produk1->tampilkanProduk();

// Menghapus objek
unset($produk1);

?>
