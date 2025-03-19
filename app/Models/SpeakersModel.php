<?php

class SpeakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSpeakers()
    {
        $sql = 'SELECT Naam, Batterijduur, Waterbestendigheid, Connectiviteit, IsActief 
                FROM Speakers 
                WHERE IsActief = 1 
                ORDER BY Naam ASC';
                
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
?>
