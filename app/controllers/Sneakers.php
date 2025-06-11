<?php

class Sneakers extends BaseController
{
    private $sneakersModel;

    public function __construct()
    {
        $this->sneakersModel = $this->model('SneakersModel');
    }

    public function index()
    {
        $result = $this->sneakersModel->getAllSneakers();

        $data = [
            'title' => 'Mooiste sneakers',
            'sneakers' => $result
        ];

        $this->view('sneakers/index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize input
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $merk = $_POST['merk'];
            $model = $_POST['model'];
            $type = $_POST['type'];
            $prijs = $_POST['prijs'];

            if ($this->sneakersModel->create($merk, $model, $type, $prijs)) {
                header("Location: " . URLROOT . "/sneakers/index");
                exit;
            } else {
                die('Fout bij het toevoegen van de sneaker');
            }
        } else {
            $data = ['title' => 'Sneaker toevoegen'];
            $this->view('sneakers/create', $data);
        }
    }

    public function delete($id)
    {
        if ($this->sneakersModel->delete($id)) {
            header("Location: " . URLROOT . "/sneakers/index");
            exit;
        } else {
            die("Fout bij verwijderen");
        }
    }
}
