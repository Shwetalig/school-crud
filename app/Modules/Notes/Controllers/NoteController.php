<?php

namespace App\Modules\Notes\Controllers;

use App\Controllers\BaseController;
use App\Modules\Notes\Models\NoteModel;

class NoteController extends BaseController
{
    protected $noteModel;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
        helper(['form']);
    }

    public function index($student_id)
    {
        $search = $this->request->getGet('search');

        $query = $this->noteModel->where('student_id', $student_id);

        if ($search) {
            $query = $query->like('note_text', $search);
        }

        $data = [
            'notes' => $query->orderBy('created_at', 'DESC')->findAll(),
            'student_id' => $student_id
        ];

        return view('App\Modules\Notes\Views\index', $data);
    }

    public function create($student_id)
    {
        return view('App\Modules\Notes\Views\form', [
            'student_id' => $student_id,
            'validation' => null
        ]);
    }

    public function store($student_id)
    {
        $rules = [
            'note_text' => 'required|min_length[5]'
        ];

        if (!$this->validate($rules)) {
            return view('App\Modules\Notes\Views\form', [
                'student_id' => $student_id,
                'validation' => $this->validator
            ]);
        }

        $this->noteModel->save([
            'student_id' => $student_id,
            'note_text' => $this->request->getPost('note_text')
        ]);

        return redirect()->to("/notes/$student_id")->with('message', 'Note added successfully!');
    }
}
