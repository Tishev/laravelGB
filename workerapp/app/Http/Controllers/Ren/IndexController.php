<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');

    }

    public  function  test1()
    {
        $route = route('admin.index');
        return <<<php
        <h1>Test1</h1>
        <p style="..."
            <a href="{$route}"> Admin</a><br>
        </p>
        php;

    }
}
