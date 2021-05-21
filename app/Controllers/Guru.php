<?php

namespace App\Controllers;

use App\Models\guruModel;

class Guru extends BaseController
{
    public function index()
    {
        return view('guru/index');
    }
    public function data()
    {
        $guruModel = new guruModel();
        $guru = $guruModel->findAll();

        $data = [
            'guru' => $guru
        ];

        return view('guru/data', $data);
    }
}
