<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zaprosik;


class MainController extends Controller
{
    public function index() {
        return view('main');
    }

}
