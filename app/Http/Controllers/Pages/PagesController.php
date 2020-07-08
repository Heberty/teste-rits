<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Video;

class PagesController extends Controller
{
    public function index()
    {
    	$main = Main::get();
    	$video = Video::get();

    	return view('pages.index', compact('main', 'video'));
    }
}
