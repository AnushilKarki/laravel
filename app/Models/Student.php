<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Remainder;
use App\Models\User;

class Student extends Model
{
    use HasFactory;
    public function users(): BelongsTo
        {
           return $this->belongsTo(User::class,'user_id');
        }
        public function remainders(): HasMany
        {
            return $this->hasMany(Remainder::class);
        }
     protected $fillable =['email','password','user_id'];
}
