<?php

class SneakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSneakers()
    {
        $sql = 'SELECT  SNKS.Id,
                        SNKS.Merk,
                        SNKS.Model,
                        SNKS.Type,
                        SNKS.Prijs
                FROM Sneakers AS SNKS
                ORDER BY SNKS.Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function create($merk, $model, $type, $prijs)
    {
        $sql = 'INSERT INTO Sneakers (Merk, Model, Type, Prijs)
                VALUES (:merk, :model, :type, :prijs)';

        $this->db->query($sql);
        $this->db->bind(':merk', $merk);
        $this->db->bind(':model', $model);
        $this->db->bind(':type', $type);
        $this->db->bind(':prijs', $prijs);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM Sneakers WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }
}
