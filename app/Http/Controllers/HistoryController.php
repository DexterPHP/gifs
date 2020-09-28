<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $UserHistory = History::where('userId',$user->id)->get();

        return view('website.History',['history'=>$UserHistory]);
    }

    public function search(Request $request)
    {

        $title = trim($request->get('query'));
        $GetSearch = file_get_contents('https://api.tenor.com/v1/search?q='.$title.'&key=RG1N89AZU1C3&limit=25');
        $de = json_decode($GetSearch);
        $emptyArray = array();
        foreach ($de->results as $gif) {
            foreach ($gif->media as $media) {
                array_push($emptyArray,$media->tinygif);
            }
        }

        if(count($emptyArray) > 0){
            $user = Auth::user();
            $History = History::where([
                ['SearchKey',$title],['userId',$user->id]
            ])->first();
            if(!isset($History)){
                // Add To user History
                $request['SearchKey']= $title;
                $request['userId'] = $user->id;
                //dd($request->all());
                $New_History = History::create($request->all());

            }
            return view('website.SeachHome',['images'=>$emptyArray]);
        }else{
            return abort('404',' Sorry Not Found 😁');
            //return view('website.search_index',['search_title'=>$title,'search_data'=>$search,'is_data'=>1,'SearchAre'=>$title]);
        }
    }

    public function SearchWithTitle(Request $request,$title)
    {

        $title = trim($title);
        $GetSearch = file_get_contents('https://api.tenor.com/v1/search?q='.$title.'&key=RG1N89AZU1C3&limit=25');
        $de = json_decode($GetSearch);
        $emptyArray = array();
        foreach ($de->results as $gif) {
            foreach ($gif->media as $media) {
                array_push($emptyArray,$media->tinygif);
            }
        }

        if(count($emptyArray) > 0){

            return view('website.SeachHome',['images'=>$emptyArray]);
        }else{
            return abort('404',' Sorry Not Found 😁');
            //return view('website.search_index',['search_title'=>$title,'search_data'=>$search,'is_data'=>1,'SearchAre'=>$title]);
        }
    }

}
