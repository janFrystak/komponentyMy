<?php

namespace App\Controllers;

use App\Models\Typkomponent;
use App\Models\Komponenty;
use App\Models\Vyrobce;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    var $komptyp;
    var $kompy;
    var $vyrobce;

    public function __construct()
    {
        $this->komptyp = new Typkomponent();
        $this->kompy = new Komponenty();
        $this->vyrobce = new Vyrobce();
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
       
        $data["info"]= $this->kompy->join("vyrobce", "komponent.vyrobce_id = vyrobce.idVyrobce", "inner")->find($id);
        //$data["bigTable"]= $this->kompy->join("mt_vyrobce", "kompy.vyrobce_id = vyrobce.idVyrobce", "inner");
        //$data["myVyrobce"] = $this -> vyrobce->where("idVyrobce",$this->kompy->vyrobce_id)->findAll();
        echo view("ComponentyTypy", $data);
    }


}
