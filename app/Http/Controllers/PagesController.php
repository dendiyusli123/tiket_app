<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function kontak()
    {
        return view('tiket_submit');
    }
}
