<?php

namespace App\Modules\Notes\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table = 'session_notes';
    protected $allowedFields = ['student_id', 'note_text'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
}

