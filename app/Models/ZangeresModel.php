<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllZangeressen()
    {
        $sql = 'SELECT 
                    Id,
                    Naam,
                    Nettowaarde,
                    Land,
                    Mobiel,
                    Leeftijd
                FROM Zangeres
                ORDER BY Leeftijd DESC';

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
