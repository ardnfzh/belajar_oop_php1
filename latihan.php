<?php 

class Siswa {
    public $nama,
            $nis,
            $id_kelas,
            $alamat,
            $nilai;
            public function getId() {
                $str = "$this->nis, $this->id_kelas";
                return $str;
            }

            public function __construct( $nama, $nis, $id_kelas, $alamat, $nilai ) {
            $this->nama = $nama;
            $this->nis = $nis;
            $this->id_kelas = $id_kelas;
            $this->alamat = $alamat;
            $this->nilai = $nilai;
            }

            public function getNilai() {
                if ($this->nilai > 70) {
                    $grade = "LULUS";
                } else {
                    $grade = "TIDAK LULUS";
                }
                return $grade;
            }
};

class InfoSiswa {
    public function Info( Siswa $siswa ) {
        $str = "{$siswa->nama}, {$siswa->getId()}, {$siswa->alamat}";
        return $str;
    }
}

$siswa1 = new Siswa("Abdul", "0022", "PPLG2", "Kuningan", 100);

// echo "Siswa dengan data :" . $siswa->getId();
echo "</br>";
$infosiswa1 = new InfoSiswa();
echo "Siswa dengan data : {$infosiswa1->Info($siswa1)} Bahwa {$siswa1->getNilai()}";