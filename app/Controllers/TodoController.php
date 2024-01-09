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
        $data['todos'] = $todosModel->getTodos();
        // print_r($data);
        // exit;
        // Load view
        return view('todo/index', $data);
    }
}
