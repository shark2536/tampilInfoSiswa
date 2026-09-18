<!-- 

Nama: Muhammad Raffa Elvano
Kelas: XI PPLG 3
Tanggal: 10 September 2026

-->

<?php

class Siswa {
    public $nis;
    public $nama;
    public $kelas;
    public $jurusan;

    function set_details($nis, $nama, $kelas, $jurusan) {
        $this->nis = $nis;
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;        
    }

    function tampilInfoSiswa() {
        echo "Nis: " . $this->nis;
        echo "<br>";
        echo "Nama: " . $this->nama;
        echo "<br>";
        echo "Kelas: " . $this->kelas;
        echo "<br>";
        echo "Jurusan: " . $this->jurusan;
    }
}

$init = new Siswa();
$init->set_details("23233","Raffa","XI PPLG 3","Pemrograman Perangkat Lunak dan Gim");
$init->tampilInfoSiswa();

?>