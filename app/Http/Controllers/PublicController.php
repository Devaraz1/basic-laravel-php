<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function index()
    {
        $data = Blog::get();
        return view('home', ['data' => $data]);
    }
}
