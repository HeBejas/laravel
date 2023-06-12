<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function my_page_index() {
        return 'this is my page';
    }
    public function first_index() {return 'first page';}

    public function second_index() {return 'second page';}
    public function third_index()  {return 'third page';}
    public function fourth_index() {return 'fourth page';}
    public function fifth_index()  {return 'fifth page';}
    public function sixth_index()  {return 'sixth page';}
    public function seventh_index(){return 'seventh page';}
    public function eighth_index() {return 'eighth page';}
}
