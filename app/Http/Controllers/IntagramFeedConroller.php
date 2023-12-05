<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntagramFeedConroller extends Controller
{
    public function index()
    {
        return view('pages.instagram_feed');
    }
}
