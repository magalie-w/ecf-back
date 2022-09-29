<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        return view('phone', [
            'products' => Product::paginate(6),
            'categories' => Category::all(),
        ]);
    }
}
