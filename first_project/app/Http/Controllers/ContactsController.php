<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zaprosik;


class ContactsController extends Controller
{
    public function index() {
        return view('contacts');
    }

}
