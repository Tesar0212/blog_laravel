<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function firstController() {
        return 'This is my first controller';
    }

    public function secondController() {
        return 'This is my second controller';
    }
}
