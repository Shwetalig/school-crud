<?php

namespace App\Modules\Schools\Controllers;

use App\Controllers\BaseController;
use App\Modules\Schools\Models\SchoolModel;

class SchoolController extends BaseController
{
    protected $schoolModel;

    public function __construct()
    {
        $this->schoolModel = new SchoolModel();
        helper(['form']);
    }

    public function index()
    {
        $search = $this->request->getGet('search');
        $query = $this->schoolModel;

        if ($search) {
            $query = $query->like('school_name', $search)
                           ->orLike('contact_person', $search);
        }

        $data['schools'] = $query->paginate(10);
        $data['pager'] = $this->schoolModel->pager;

        return view('App\Modules\Schools\Views\index', $data);
    }

    public function create()
    {
        return view('App\Modules\Schools\Views\form', ['validation' => null]);
    }

    public function store()
    {
        $rules = [
            'school_name' => 'required',
            'contact_person' => 'required',
            'email' => 'required|valid_email',
            'num_students' => 'required|numeric',
            'status' => 'required|in_list[active,inactive]'
        ];

        if (!$this->validate($rules)) {
            return view('App\Modules\Schools\Views\form', [
                'validation' => $this->validator
            ]);
        }

        $this->schoolModel->save($this->request->getPost());
        return redirect()->to('/schools')->with('message', 'School added successfully!');
    }

    public function edit($id)
    {
        $school = $this->schoolModel->find($id);
        return view('App\Modules\Schools\Views\form', [
            'school' => $school,
            'validation' => null
        ]);
    }

    public function update($id)
    {
        $rules = [
            'school_name' => 'required',
            'contact_person' => 'required',
            'email' => 'required|valid_email',
            'num_students' => 'required|numeric',
            'status' => 'required|in_list[active,inactive]'
        ];

        if (!$this->validate($rules)) {
            return view('App\Modules\Schools\Views\form', [
                'school' => $this->request->getPost(),
                'validation' => $this->validator
            ]);
        }

        $this->schoolModel->update($id, $this->request->getPost());
        return redirect()->to('/schools')->with('message', 'School updated successfully!');
    }

    public function delete($id)
    {
        $this->schoolModel->delete($id);
        return redirect()->to('/schools')->with('message', 'School deleted.');
    }
}
