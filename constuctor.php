<?php
class komputer
{
    public $prosesor;
    public $memory;

    public function __construct ($prosessor,$memory = "12 Gb")
    {
        $this->prosessor = $prosessor;
        $this->memory = $memory;

    }
    public function getPRINT(){
        return "$this->prosessor | $this->memory";

    }
}

$komputerSaya = new komputer ("Core i7","8 GB");
echo $komputerSaya->getPRINT();
?>
