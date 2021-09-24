<?php

// define('NAMA', 'muhammad irsyad');
// echo NAMA;

// echo "<br>";

// const UMUR = 32 ;
// echo UMUR;


// class Coba {
//     const NAMA = 'ichan';
// }

// echo Coba::NAMA;


// echo __LINE__;



// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;









?>
