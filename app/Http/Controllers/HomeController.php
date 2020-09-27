<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $cont = file_get_contents('https://api.tenor.com/v1/search?key=RG1N89AZU1C3&limit=20');
        $de = json_decode($cont);
        $emptyArray = array();
        foreach ($de->results as $gif) {
            foreach ($gif->media as $media) {
                array_push($emptyArray,$media->tinygif);
            }
        }

        return view('website.Home',['images'=>$emptyArray]);
    }

    public function contact(){

        return view('website.contact');
    }
}
