<?php

class Mahasiswa_model
{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //database source name
        $dsn = 'mysql:host=localhost; dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }


    // private $mhs = [
    //     [
    //         "nama" => "Hareza Yoan",
    //         "nim" => "v3421050",
    //         "email" => "hareza@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Nabiila Asma",
    //         "nim" => "o3421111",
    //         "email" => "nabiila@gmail.com",
    //         "jurusan" => "Oceanografi"
    //     ],
    //     [
    //         "nama" => "Kristanto",
    //         "nim" => "m3421070",
    //         "email" => "kristanto@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
