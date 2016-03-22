<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show($slug)
    {
        $pageRes = Page::where('slug', '=', $slug, 'and', 'status', '=', 'published')->firstOrFail();

        return view('page', ['page' => $pageRes] );
    }
}
