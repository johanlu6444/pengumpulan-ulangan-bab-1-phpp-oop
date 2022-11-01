<?php

class newconstruct{
    public $nama;
    public $level;

    public function ___construct($nama,$level)
    {
        $this->nama="$nama";
        $this->level="level";

    }
}

$obj = new newconstruct("newconstructor","easy");

echo 'nama judul:'. $obj->name.'<br>';
echo 'level:'. $obj->level;