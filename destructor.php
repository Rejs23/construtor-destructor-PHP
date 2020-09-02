<?php
class benda {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function __destruct() {
    echo "Laptop ini merknya {$this->nama} dan berwarna {$this->warna}.";
  }
}

$laptop = new benda("Lenovo", "hitam");
unset($laptop);
?>
