<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        return $this->loadTheme('products.index', $this->data);
    }
    public function create(){
        return view('shop::create');
    }
}
