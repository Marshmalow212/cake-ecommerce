<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    // protected $table = 'admins';
    protected $fillable = [
        'name','email','password','confirm_password','is_active','is_draft','soft_delete'
    ];

}
