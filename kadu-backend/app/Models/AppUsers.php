<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUsers extends Model
{
    use HasFactory;
    protected $table = 'users_table';
    protected $fillable = ['user_id', 'user_social_security', 'user_name', 'user_email', 'user_phone', 'user_password', 'user_is_verified' ]; // Add your column names here
}
