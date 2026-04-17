<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 425f607 (init project student manager)
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
<<<<<<< HEAD
    protected $fillable = [
    'ma_sv',
    'ho_ten',
    'nam_sinh',
    'email',
    'lop'
];
}
=======
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)
            ->withPivot(['score', 'registered_at']);
    }
}
>>>>>>> 425f607 (init project student manager)
