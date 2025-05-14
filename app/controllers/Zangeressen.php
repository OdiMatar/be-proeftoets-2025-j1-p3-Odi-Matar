<?php

class Zangeressen extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
        $this->zangeressenModel = $this->model('ZangeressenModel');
    }

    public function index()
    {
        /**
         * Haal alle zangeressen op uit de database.
         */
        $result = $this->zangeressenModel->getAllZangeressen();

        /**
         * Het $data-array geeft informatie mee aan de view-pagina.
         */
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'zangeressen' => $result
        ];

        /**
         * Laad de view en geef de data mee.
         */
        $this->view('zangeressen/index', $data);
    }

    public function delete($id)
    {
        $this->zangeressenModel->delete($id);
        header('Location: ' . URLROOT . '/zangeressen/index');
        exit;
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Controleer of alle vereiste velden zijn ingevuld
            if (
                empty($_POST['naam']) ||
                empty($_POST['nettowaarde']) ||
                empty($_POST['land']) ||
                empty($_POST['mobiel']) ||
                empty($_POST['leeftijd'])
            ) {
                echo '<div class="alert alert-danger text-center" role="alert"><h4>Vul alle velden in</h4></div>';
                header('Refresh: 3; URL=' . URLROOT . '/zangeressen/create');
                exit;
            }

            // Voeg de zangeres toe aan de database
            $this->zangeressenModel->create($_POST);
            echo '<div class="alert alert-success text-center" role="alert"><h4>Zangeres toegevoegd</h4></div>';
            header('Refresh: 3; URL=' . URLROOT . '/zangeressen/index');
            exit;
        }

        $data = [
            'title' => 'Nieuwe zangeres toevoegen'
        ];

        $this->view('zangeressen/create', $data);
    }
}
