<?php

class Speakers extends BaseController
{
    private $speakersModel;

    public function __construct()
    {
        $this->speakersModel = $this->model('SpeakersModel');
    }

    public function index()
    {
        // Haal alle speakers op uit de database
        $result = $this->speakersModel->getAllSpeakers();

        // Data-array met titel en speakersinformatie
        $data = [
            'title' => 'Hoogste Speakers Geluid',
            'speakers' => $result
        ];

        // Roep de view aan met de data
        $this->view('speakers/index', $data);
    }
}
?>
