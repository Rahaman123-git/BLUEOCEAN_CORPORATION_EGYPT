<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('frontend.blog.home');
    }
    
    public function blogDetails(): View
    {
        return view('frontend.blog.details');
    }

    public function eventDetails(): View
    {
        return view('frontend.blog.event-details');
    }
}