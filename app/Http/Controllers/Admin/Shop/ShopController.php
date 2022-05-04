<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ShopController
 * @package App\Http\Controllers\Admin\Shop
 */
class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addView()
    {
        return view('admin.shop.add', [
            'data' => (object)['belongs_to' => 'Loja', 'page_name' => 'Adicionar']
        ])->with('title', 'Adicionar loja');
    }
}
