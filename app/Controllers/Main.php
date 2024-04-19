<?php

namespace App\Controllers;

use App\Models\Typkomponent;
use App\Models\Komponenty;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    var $komptyp;
    var $kompy;

    public function __construct()
    {
        $this->komptyp = new Typkomponent();
        $this->kompy = new Komponenty();
    }
    public function index()
    {
        //
    }

    public function getKompType()
    {
        $data["types"] = $this->komptyp->findAll();
        echo view("ComponentType", $data);
    }
    public function getKomp($typeId)
    {
        $data["komponenty"] = $this->kompy->where("typKomponent_id", $typeId)->findAll();
        echo view("ComponentExamples", $data);
    }

    public function getKompInfo($id)
    {
        $data["info"]= $this->kompy->where("id", $id)->findAll();
        echo view("ComponentyTypy", $data);
    }


}
