<?php

const CHECK_STATUS = 'HADIR';

CONST CHECK_NAMA_GORENGAN = [
    'TAHU ISI', 'BALA BALA', 'RISOL', 'BAKWAN', TRUE
];
const users =[
    [
        'name'=> 'Robin',
        'umur'=> 18,
        'role'=> 'student',
        'is_active'=> true
    ],
    [
        'name'=> 'bin',
        'umur'=> 18,
        'role'=> 'teacher',
        'is_active'=> true
    ],
    [
        'name'=> 'Robin',
        'umur'=> 18,
        'role'=> 'student',
        'is_active'=> true
        
    ]
    ];
$index = 1;

//acho CHECK_STATUS;
//VAR_DUMP(CHECK_NAMA_GORENGAN);

foreach(users as $key => $value){
    echo 'no' . $index++ . '<br>';
    echo 'nama:  ' . $value['name'] . '<br>';
    echo '<hr>';
}
