<?php

namespace App\Http\Controllers\Admin\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class OfficerController
 * @package App\Http\Controllers\Admin\Officer
 */
class OfficerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addView()
    {
        return view('admin.officer.add', [
            'data' => (object)['belongs_to' => 'Funcionário', 'page_name' => 'Adicionar']
        ])->with('title', 'Adicionar funcionário');
    }
}
