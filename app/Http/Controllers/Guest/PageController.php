<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        //se voglio passare un file a tutte le views:
        //e lavoro sul file Providers\AppServiceProvider
        ////$valore = config('file.text');
        return view('home');
    }
}
