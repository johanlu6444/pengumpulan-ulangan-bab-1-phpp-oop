<?php

class membuatfunction{
/* 4.jenis funtion yang sering digunakan */
    /* a.fungsi tanpa parameter dengan tanpa nilai return */
    public function sayhello(){
        echo 'ini dari class'. __CLASS__;
    }
    /* b.function dengan parameter dan tidak mengambilkan nilai */
    public function perkalian(){
        echo 'angka yang dimasukkan adalah';
    }
    /* c.function dengan parameter dan mengembalikan nilai */
    public function penjumlahan($numb_a,$numb_b){
        return $numb_a * $numb_b;
    }
    /* d.function tanpa parameter dan mengembalikan nilai */
    public function gettitle(){
        return $this->title;
    }
}
$obj = new membuatfunction();
echo $obj->sayhello();
echo '<hr>';