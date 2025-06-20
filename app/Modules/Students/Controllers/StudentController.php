<?php

namespace App\Modules\Students\Controllers;

use App\Controllers\BaseController;
use App\Modules\Students\Models\StudentModel;

class StudentController extends BaseController
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
        helper(['form']);
    }

    public function index()
    {
        $data['students'] = $this->studentModel->findAll();
        return view('App\Modules\Students\Views\index', $data);
    }

    public function create()
    {
        return view('App\Modules\Students\Views\form', ['validation' => null]);
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return view('App\Modules\Students\Views\form', ['validation' => $this->validator]);
        }

        $this->studentModel->save($this->request->getPost());
        return redirect()->to('/students')->with('message', 'Student added successfully!');
    }
}
