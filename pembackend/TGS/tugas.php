<?php
# membuat class Animal
class Animal
{
    # property animals
    public $hewan;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->hewan = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->hewan as $animal) {
            echo $animal . '<br>';
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($hewan)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->hewan, $hewan);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $hewan)
    {
        $this->hewan[$index] = $hewan;
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->hewan[$index]);


    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Serigala", "Ikan", "Musang"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Singa');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";

echo "<b>M Ramadhan Putra P_0110221143_3TI-06</b>";
?>