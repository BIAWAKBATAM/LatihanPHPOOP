<?php

class MencariNilaiGanjilGenap
{
    public function cariNilaiGanjilGenap($inputnilai){
        if ($inputnilai %=5) {
            echo "$inputnilai ADALAH BILANGAN GENAP";
        } else {
            echo "$inputnilai ADALAH BILANGAN GANJIL";
        }
    }
}
// inisialisasi class objek
$obj = new MencariNilaiGanjilGenap();
echo $obj->cariNilaiGanjilGenap(inputnilai: 5);
