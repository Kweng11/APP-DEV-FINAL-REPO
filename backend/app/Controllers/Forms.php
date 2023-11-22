<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Response;


use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
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
            'typhoon' => $json->typhoon,
            'heavyrains' => $json->heavyrains,
            'total' => $json->total,
            'standcrop' => $json->standcrop,
            'transdate' => $json->transdate,
            'expdate' => $json->expdate,
            'exparea' => $json->exparea,
            'expvolume' => $json->expvolume,

        ];

        $main = new MainModel();
        $r = $main->insert($data);
        return $this->respond($r,200);
    }

    public function del()
    {
        $json = $this->request->getJSON();
        $id = $json->id;
        $main = new MainModel();
        $r = $main->delete($id);
        return $this->respond($r, 200);
    }
    
    public function GetData()
    {

        $info = new MainModel();
        
        $data = $info->findAll();
        
        return $this->respond($data, 200);
    }

}
