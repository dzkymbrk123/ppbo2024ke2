<?php
class Dosen {
    public $nama;
    public $nip;
    public $no_hp;
    public $alamat;
    public $nidn;

    public function __construct($nama, $nip, $no_hp, $alamat, $nidn) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
        $this->nidn = $nidn;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "No HP: " . $this->no_hp . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
        echo "NIDN: " . $this->nidn . "<br>";
    }
}

$dian = new Dosen("Dian Prawira", "198411132015041001", "62111111", "Jln Purnama", "0013118405");

$dian->tampilkanInfo();
?>
