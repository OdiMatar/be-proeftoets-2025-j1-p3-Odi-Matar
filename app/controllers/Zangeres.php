<?php

class Zangeres extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
        $zangeressen = $this->zangeresModel->getAllZangeressen();

        $data = [
            'title' => 'Top 5 Rjkste zangeressen ter wereld',
            'zangeressen' => $zangeressen
        ];

        $this->view('zangeres/index', $data);
    }
}
