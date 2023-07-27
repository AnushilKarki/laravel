<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function users(): BelongsTo
        {
           return $this->belongsTo(User::class,'user_id');
        }
     protected $fillable =['email','password','user_id'];
}
