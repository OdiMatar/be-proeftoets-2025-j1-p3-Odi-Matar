<?php

class ZangeressenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Haal de top 5 rijkste zangeressen op uit de database
     */
    public function getAllZangeressen()
    {
        $sql = "
            SELECT 
                ZGRS.Id,
                ZGRS.Naam,
                ZGRS.Nettowaarde,
                ZGRS.Land,
                ZGRS.Mobiel,
                ZGRS.Leeftijd
            FROM 
                Zangeres AS ZGRS
            ORDER BY 
                ZGRS.Nettowaarde DESC
            LIMIT 5
        ";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    /**
     * Verwijder een zangeres op basis van ID
     */
    public function delete($id)
    {
        $sql = "
            DELETE FROM 
                Zangeres
            WHERE 
                Id = :id
        ";

        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }

    /**
     * Voeg een nieuwe zangeres toe
     */
    public function create($data)
    {
        $sql = "
            INSERT INTO Zangeres (Naam, Nettowaarde, Land, Mobiel, Leeftijd)
            VALUES (:naam, :nettowaarde, :land, :mobiel, :leeftijd)
        ";

        $this->db->query($sql);
        $this->db->bind(':naam', $data['naam'], PDO::PARAM_STR);
        $this->db->bind(':nettowaarde', (int) $data['nettowaarde'], PDO::PARAM_INT);
        $this->db->bind(':land', $data['land'], PDO::PARAM_STR);
        $this->db->bind(':mobiel', $data['mobiel'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', (int) $data['leeftijd'], PDO::PARAM_INT);

        return $this->db->execute();
    }
}
