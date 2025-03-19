<?php

class Producten extends BaseController
{
    private $productenModel;

    public function __construct()
    {
        $this->productenModel = $this->model('ProductenModel');
    }

    public function index()
    {
        // Haal alle actieve producten op
        $result = $this->productenModel->getAllProducten();

        // Data-array met titel en productinformatie
        $data = [
            'title' => 'Meeste Uitverkocht',
            'producten' => $result
        ];

        // Laad de view en geef de data mee
        $this->view('producten/index', $data);
    }
}
?>

