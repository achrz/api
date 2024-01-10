<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TodoController extends Controller
{
    public function index()
    {
        // Load model
        $todosModel = new \App\Models\TodosModel();

        // Get todos from the model
        $awokwok = $todosModel->getTodos();
        $xixixi = json_decode($awokwok, true);
        $data['bosco'] = $xixixi['bsc_umr_stck'];
        // print_r($data);
        // exit;
        // Load view
        return view('todo/index', $data);
    }
}
