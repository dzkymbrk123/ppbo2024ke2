<?php
class Pegawai {
    protected $no_hp;

    public function __construct($no_hp) {
        $this->no_hp = $no_hp;
    }

    protected function getNoHp() {
        return $this->no_hp;
    }
}

class Dosen extends Pegawai {
    public $nama;
    public $nip;
    public $alamat;
    public $nidn;

    public function __construct($nama, $nip, $alamat, $nidn) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->nidn = $nidn;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
        echo "NIDN: " . $this->nidn . "<br>";
        echo "No HP: " . $this->getNoHp() . "<br>"; 
    }
}

$dian = new Dosen("Dian Prawira", "198411132015041001", "Jln Purnama", "0013118405");

$dian->tampilkanInfo();
?>
