<?php

namespace App\Controllers;

use App\Models\Typkomponent;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    var $komptyp;

    public function __construct()
    {
        $this->komptyp = new Typkomponent();
    }
    public function index()
    {
        //
    }

    public function getKompType()
    {
        $data["types"] = $this->komptyp;
        echo view("ComponentType", $data);
    }


}
