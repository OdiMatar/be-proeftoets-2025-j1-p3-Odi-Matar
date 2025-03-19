<?php

class ProductenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducten()
    {
        $sql = 'SELECT Id, Naam, Beschrijving, Prijs, Voorraad 
                FROM Producten 
                WHERE IsActief = 1 
                ORDER BY Naam ASC';
        
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
?>

