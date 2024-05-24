<?php

namespace App\Controllers;

use App\Models\Typkomponent;
use App\Models\Komponenty;
use App\Models\Vyrobce;
use App\Controllers\BaseController;
use App\Models\NazevParametr;
use App\Models\Parametr;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Config_pager;

class Main extends BaseController
{
    var $komptyp;
    var $kompy;
    var $vyrobce;
    var $parametr;
    var $nazevparametr;

    public function __construct()
    {
        $this->komptyp = new Typkomponent();
        $this->kompy = new Komponenty();
        $this->vyrobce = new Vyrobce();
        $this->parametr = new Parametr();
        $this->nazevparametr = new NazevParametr();

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
        $config = new Config_pager();
        $data["komponenty"] = $this->kompy->where("typKomponent_id", $typeId)->paginate($config->pager_per_page);
        //$data["pager"] = $this->kompy->where("typKomponent_id", $typeId)->paginate(4);
        $data["pager"] = $this->kompy->pager;
        echo view("ComponentExamples", $data);
    }

    public function getKompInfo($id)
    {
       
        $data["info"]= $this->kompy->join("vyrobce", "komponent.vyrobce_id = vyrobce.idVyrobce", "inner")->find($id);
        $data["parametrs"] = $this->parametr->join("komponent", "komponent.id = parametr.komponent_id", "inner")->join("nazevparametr","parametr.nazevParametr_id = nazevparametr.id", "inner")->where("komponent.id", $id)->findAll();
        //$data["bigTable"]= $this->kompy->join("mt_vyrobce", "kompy.vyrobce_id = vyrobce.idVyrobce", "inner");
        //$data["myVyrobce"] = $this -> vyrobce->where("idVyrobce",$this->kompy->vyrobce_id)->findAll();
        echo view("ComponentyTypy", $data);
    }


}
