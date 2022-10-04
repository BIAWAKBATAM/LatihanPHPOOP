<?php

Class latihanarray{
    // Membuat class latihanArray
    // array dibagi menjadi 3 
    // 1. array biasa 
    public $numbers = [
        1,2,3,4,5
    ];

    // Menampilkan / mengeluarkan nilain array biasa 
    public function arrayBiasa()
    {
        foreach ($this->numbers as $key => $value){
            echo $value. '. ' .$key . '<br>';
        }
        echo '<hr>';
    }
    // 2. Array Asosiasi
    public $user = [
        'Nama' => "Arief",
        'Umur' => 17,
        'Kelas' => 12,
        'Jurusan' => "RPL"
    ];

    // Menampilkan atau mengeluarkan nilai array asosioasi
    public function arrayAsosiasi()
    {
        foreach ($this->user as $key => $value){
            echo $key . ':' . $value . '<br>';
        } 
    }
    //3. Array Multi dimensi
    public $student = [
'Satu' =>
    [
        'Nama' => 'Denis',
        'Umur'=> 17,
        'Kelas' => 12,
        'Jurusan' => 'RPL'
    ],
    'Dua' =>
    [
        'Nama' => 'andrew',
        'Umur' => 17,
        'Kelas' => 12,
        'Jurusan' => 'RPL'
    ],
    'Tiga' =>
    [
        'Nama' => 'David',
        'Umur' => 17,
        'Kelas' => 12,
        'Jurusan' => 'RPL'
    ]
    ];
    // menampilkan atau mengelurkan nilai array
    public function getArray()
    {
        foreach ($this->student as $key => $value) {
            echo 'Nama: ' . $value['Nama'] . '<br>';
            echo 'Umur: ' . $value['Umur'] . '<br>';
            echo 'Kelas: ' . $value['Kelas'] . '<br>';
            echo 'Jurusan: ' . $value['Jurusan'] . '<br>';
            echo '<hr>';
            
            

        }
    }
}
$obj = new LatihanArray();
echo $obj->arrayBiasa();
echo $obj->arrayAsosiasi() . '<br>';
echo $obj->getArray();