<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newscontroller extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.news.create');
    }
}
