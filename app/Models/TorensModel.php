<?php

class TorensModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTorens()
    {
        $sql = 'SELECT Naam, Locatie, Hoogte, AantalVerdiepingen, JaarVoltooid FROM Torens ORDER BY Locatie DESC';
        $this->db->query($sql);
        return $this->db->resultSet();
    }

}