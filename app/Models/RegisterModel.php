<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    protected $table = 'register';
    protected $fillable = ['email','password'];
    public $timestamps = false;
}
