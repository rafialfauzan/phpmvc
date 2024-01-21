<?php

class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    } 
    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // private $mhs = [
    //     [
    //         "nama" => "Rafi Fauzan",
    //         "nrp" => "210030433",
    //         "email" => "210030433@stikom-bali.ac.id",
    //         "jurusan"=> "Sistem Informasi",
    //     ],
    //     [
    //         "nama" => "Indra Suyoga",
    //         "nrp" => "210030443",
    //         "email" => "210030433@stikom-bali.ac.id",
    //         "jurusan"=> "Sistem Informasi",
    //     ],
    //     [
    //         "nama" => "Clarions Jonarence",
    //         "nrp" => "210030305",
    //         "email" => "210030305@stikom-bali.ac.id",
    //         "jurusan"=> "Sistem Informasi",
    //     ]
    // ];

    
}