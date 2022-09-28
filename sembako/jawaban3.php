<?php
 class toko_sembako{
    public $harga = "3500";
    public $nama_pembeli = "mang atu";
    public $nama_sembako = "mie instan";

    public function __construct(){
        echo "ini berasal dari construct toko_sembako";
    }
    public function ambil_sembako(){
        echo "ambil_sembako milik $this->nama_pembeli dengan harga $this->harga berupa $this->nama_sembako";
    }
    public function __destruct(){
        echo "ini berasal dari destruct toko_sembako" ;
    }
   
 }
    $nama_sembako = new toko_sembako();
    echo "<br/>";
    echo $nama_sembako->ambil_sembako();
    echo "<br/>";
    ?>