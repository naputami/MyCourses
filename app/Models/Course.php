<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    public $timestamps = false;
    protected $fillable=['course_date', 'student_id', 'subject_teacher_id'];
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function subject_teacher(): BelongsTo
    {
        return $this->belongsTo(SubjectTeacher::class);
    }

}
