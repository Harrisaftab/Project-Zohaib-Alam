<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Blog listing page
    public function index()
    {
        return view('pages.frontend.blog.index');
    }

    // Blog detail page
    // public function detail($slug)  // $slug will be dynamic for each blog post
    // {
    //     return view('pages.frontend.blog.detail', compact('slug'));
    // }
}
