<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        $meta['title'] = 'Home Page';
        $meta['description'] = 'Home Page Description';
        return view('theme.default.pages.home')->with(['meta'=>$meta] );
    }
}
