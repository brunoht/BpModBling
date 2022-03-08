<?php

namespace Modules\Bling\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlingController extends Controller
{
    public function index()
    {
        return response()->json(['status' => 'success']);
    }
}
