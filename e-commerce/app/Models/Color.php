<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    public $updated_at = false;
    public $created_at = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
