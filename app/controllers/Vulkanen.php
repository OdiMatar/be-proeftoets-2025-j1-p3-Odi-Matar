<?php

class Vulkanen extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('VulkanenModel');
    }

    public function index()
    {
        $result = $this->vulkaanModel->getAllVulkanen();

        $data = [
            'title' => 'Overzicht van Vulkanen',
            'vulkanen' => $result
        ];

        $this->view('vulkanen/index', $data);
    }
}
?>

