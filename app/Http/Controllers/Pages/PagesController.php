<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;

class PagesController extends Controller
{
    public function index()
    {
    	$main = Main::get();

    	return view('pages.index', compact('main'));
    }
}
