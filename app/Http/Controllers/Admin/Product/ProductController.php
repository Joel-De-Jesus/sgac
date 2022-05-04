<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addView()
    {
        return view('admin.product.add', [
            'data' => (object)['belongs_to' => 'Produto', 'page_name' => 'Adicionar']
        ])->with('title', 'Adicionar produto');
    }
}
