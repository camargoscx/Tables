<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Preference extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
        // belongsTo = relacionamento inverso(User.php)
    }
}
