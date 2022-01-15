<?php

class Orang {
    public $nama;
    public $umur;
    public $email;
}

class Mahasiswa extends Orang {
    public $nrp;
    public $ipk;

    function tampil($nama = "Guntur", $umur = "20", $ipk = "3,00") {
        
        $this->$nama = $nama;
        $this->$umur = $umur;
        $this->$ipk = $ipk;

        return "Halo, nama saya " + $this->$nama + ", umur saya " + $this->$umur + "tahun dan IPK saya " + $this->$ipk;
    }

    tampil("Guntur", "20", "3,00"); 
}