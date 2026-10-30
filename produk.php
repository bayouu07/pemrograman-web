
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

    // Instance Method untuk menghitung total harga
    public function hitungTotalHarga()
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // Static Method untuk mengambil nilai pajak
    public static function getPajak()
    {
        return self::PAJAK;
    }

    // Instance Method untuk menampilkan produk
    public function tampilkanProduk()
    {
        echo "Produk: " . $this->nama . "<br>";

        echo "Harga: Rp" .
            number_format($this->harga, 0, ',', '.') . "<br>";

        echo "Stok: " . $this->stok . "<br>";

        echo "Pajak: " .
            (Produk::getPajak() * 100) . "%<br><br>";

        echo "Total harga setelah pajak: Rp" .
            number_format($this->hitungTotalHarga(), 0, ',', '.');
    }
}

// Membuat objek Produk
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Memanggil method
$produk1->tampilkanProduk();

?>
