<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rights extends Model
{
    use HasFactory;

    protected $table = "userrights";

    protected $fillable = [
        'rights',
        // 'role_id',      
    ];
}
