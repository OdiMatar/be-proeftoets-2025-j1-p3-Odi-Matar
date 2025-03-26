<?php

class VulkanenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllVulkanen()
    {
        $this->db->query("SELECT * FROM Vulkaan ORDER BY Naam ASC");
        return $this->db->resultSet();
    }
}
?>

