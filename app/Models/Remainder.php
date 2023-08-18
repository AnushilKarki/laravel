<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Student;
use App\Models\User;

class Remainder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'student_id',
        'followup_date',
        'followup_detail',
        'status'
    ];
    public function student(): BelongsTo
    {
       return $this->belongsTo(Student::class,'student_id');
    }
    public function user(): BelongsTo
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
