<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Response;


use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\InfoModel;
use App\Models\DamageModel;
use App\Models\StatusModel;
use App\Models\ExpectModel;
use App\Controllers\BaseController;

class Forms extends ResourceController
{
    public function index()
    {
        //
    }
    public function save()
    {
        $json = $this->request->getJSON();
        $data = [
            'Name' => $json->Name,
            'location' => $json->location,
            'nocans' => $json->nocans,
            'seeddate' => $json->seeddate,
            'area' => $json->area,
        ];

        $main = new InfoModel();
        $r = $main->insert($data);
        return $this->respond($r,200);
    }
    public function save2()
    {
        $json = $this->request->getJSON();
        $data = [
            'typhoon' => $json->typhoon,
            'heavyrains' => $json->heavyrains,
            'total' => $json->total,
        ];

        $main = new DamageModel();
        $r = $main->insert($data);
        return $this->respond($r,200);
    }
    public function save3()
    {
        $json = $this->request->getJSON();
        $data = [
            'standcrop' => $json->standcrop,
            'transdate' => $json->transdate,
        ];

        $main = new StatusModel();
        $r = $main->insert($data);
        return $this->respond($r,200);
    }
    public function save4()
    {
        $json = $this->request->getJSON();
        $data = [
            'expdate' => $json->expdate,
            'exparea' => $json->exparea,
            'expvolume' => $json->expvolume,
        ];
        $main = new ExpectModel();
        $r = $main->insert($data);
        return $this->respond($r,200);
    }
    public function GetData()
    {
        $main = new InfoModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function GetData2()
    {
        $main = new DamageModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function GetData3()
    {
        $main = new StatusModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function GetData4()
    {
        $main = new ExpectModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
}
