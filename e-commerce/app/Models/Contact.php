<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $updated_at = false;
    public $created_at = false;

    public $fillable = ['name', 'email', 'message'];
}
