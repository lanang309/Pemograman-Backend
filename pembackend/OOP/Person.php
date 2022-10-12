<?php
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        return $this->nama;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$put = new Person('PutraPrayoga', 'Depok', 'Informatika');
$ismail = new Person('Ismail Marzuki', 'Depok', 'Bisnis Digital');

echo $put->getNama();
echo '<br>';
echo $ismail->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Putra Prayoga',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Ismail Marzuki',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $put = new Person();
// $put->setNama('Putra Prayoga');
// echo $put->getNama();
// echo '<br>';

// $ismail = new Person();
// $ismail->setNama('Ismail Marjuki');
// echo $ismail->getNama();
?>