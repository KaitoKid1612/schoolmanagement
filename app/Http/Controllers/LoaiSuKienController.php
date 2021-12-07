<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Services\Menu\MenuService;
use App\Http\Requests;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Support\Facades\Redirect;

class LoaiSuKienController extends Controller
{

    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    
    public function create()
    {
        return view('admin.menus.add', [
            'title'=>'Thêm Loại Sự Kiện'
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        dd($request->input());
    }
}
