<?php

class Torens extends BaseController
{
    private $torensModel;

    public function __construct()
    {
        $this->torensModel = $this->model('TorensModel');
    }

    public function index()
    {
        // Haal alle torens op uit de database
        $result = $this->torensModel->getAllTorens();
       
        // Data-array met titel en torensinformatie
        $data = [
            'title' => 'Torens locaties',
            'torens' => $result
        ];

        // Roep de view aan met de data
        $this->view('torens/index', $data);
    }
}
?>
