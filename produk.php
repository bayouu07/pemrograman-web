
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
    }

    // Method untuk menampilkan produk
    public function tampilkanProduk()
    {
        $totalHarga = $this->harga + ($this->harga * self::PAJAK);

        echo "Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak: " . (self::PAJAK * 100) . "%<br><br>";

        echo "Total harga setelah pajak: Rp" .
            number_format($totalHarga, 0, ',', '.');
    }
}

// Membuat objek produk
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Menampilkan produk
$produk1->tampilkanProduk();

?>
