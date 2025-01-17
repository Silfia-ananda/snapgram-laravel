<?php

namespace App\Http\Controllers;

use App\models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('home', compact('photos'));
    }
}
