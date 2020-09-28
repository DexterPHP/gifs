<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        $emptyArray = array();
        $History = History::where('userId',$user->id)->orderBy('id','desc')->get();
        if(isset($History)){
            foreach ($History as $item){
                $cont = file_get_contents('https://api.tenor.com/v1/search?q='.$item->SearchKey.'&key=RG1N89AZU1C3&limit=12');
                $de = json_decode($cont);
                foreach ($de->results as $gif) {
                    foreach ($gif->media as $media) {
                        array_push($emptyArray,$media->tinygif);
                    }
                }
            }
        }
        else{
            $cont = file_get_contents('https://api.tenor.com/v1/search?key=RG1N89AZU1C3&limit=25');
            $de = json_decode($cont);
            foreach ($de->results as $gif) {
                foreach ($gif->media as $media) {
                    array_push($emptyArray,$media->tinygif);
                }
            }
        }


        return view('website.Home',['images'=>$emptyArray]);
    }

    public function contact(){

        return view('website.contact');
    }
}
