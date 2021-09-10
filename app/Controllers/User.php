<?php

namespace App\Controllers;

use App\Models\DataModel;


class User extends BaseController
{
    protected $dataModel;

    public function __construct()
    {
        $this->dataModel = new DataModel();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('user/index', $data);
    }

    public function data()
    {
        $sensor = $this->dataModel->findAll();

        $data = [
            'title' => 'Data Sensor',
            'data'  => $sensor
        ];
        return view('user/data', $data);
    }

    public function simpan()
    {
        $this->dataModel->save([
            'value' => $this->request->getVar('value')
        ]);
        echo 'sukses insert data';
    }
}
