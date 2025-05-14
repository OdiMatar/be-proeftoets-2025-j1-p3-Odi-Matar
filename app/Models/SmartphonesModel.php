<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllSmartphones()
    {
       $sql = 'SELECT  SMPS.Merk
               ,SMPS.Model
               ,SMPS.Prijs
               ,SMPS.Geheugen
               ,SMPS.Besturingssysteem
               ,CONCAT(SMPS.Schermgrootte, " inch") as Schermgrootte
               ,DATE_FORMAT(SMPS.Releasedatum, "%d/%m/%Y") as Releasedatum
        FROM   Smartphones as SMPS
        ORDER BY SMPS.Schermgrootte DESC
                ,SMPS.Prijs DESC
                ,SMPS.Geheugen DESC
                ,SMPS.Releasedatum DESC';


        $this->db->query($sql);

        return $this->db->resultSet();
    }

}