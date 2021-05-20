<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchNumber(Request $request){
        $result = explode(",", $request->input_value);
        rsort($result);
        $token = JWTAuth::FromUser(JWTAuth::user());
        if (in_array($request->search_value,$result))
        {
            $status = 'true';
            $data = new Search();
            $data->user_id = JWTAuth::user()->id;
            $data->input_value = $result;
            $data->search_value = $request->search_value;
            $data->save();
            return view('home',compact('token','result','status','data'));
        }
        else{
            $status = 'false';
            $data = new Search();
            $data->user_id = JWTAuth::user()->id;
            $data->input_value = $result;
            $data->search_value = $request->search_value;
            $data->save();
            return view('home',compact('token','result','status'));
        }
    }
    public function allSearches($user_id){
        $data = Search::where('user_id','=',$user_id)->select('created_at', 'input_value')->get();
        $dataset = [
            'status'=>'success',
            'user_id'=>$user_id,
            'payload'=> $data
        ];
        return response()->json($dataset,200);
    }
}
