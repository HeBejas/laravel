<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zaprosik;


class AboutController extends Controller
{
    public function index() {
        return view('about');
    }


}
