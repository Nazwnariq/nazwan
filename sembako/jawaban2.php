<?php
    class toko_sembako{
        public $harga="3500";

        public function __construct()
        {
            echo "ini berasal dari consrtuct toko_sembako <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct toko_sembako";
        }
    }
        $toko_sembako = new toko_sembako();