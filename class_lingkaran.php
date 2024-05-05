<?php
    class Lingkaran {
        // properties
        public $r;

        // method
        public function luas() {
            $l = 3.14 * $this->r * $this->r;
            return $l;
        }
        public function keliling() {
            $k = 2 * 3.14 * $this->r;
            return $k;
        }
    }
?>