<?php

namespace App\Controllers;

use App\Models\ModelMateri;

class Home extends BaseController
{
    protected $modelmateri;
    public function __construct()
    {
        $this->modelmateri = new ModelMateri();
    }

    public function index()
    {
        $materi = $this->modelmateri->findAll();

        $data = [
            "title" => 'Materi',
            "materi" => $materi
        ];

        return view('dasboard', $data);
    }
}
