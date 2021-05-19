<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class SearchController extends Controller
{
    public function searchNumber(Request $request){
        $result = explode(",", $request->input_value);
        $resultVal = rsort($result);
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
    public function searchAPI($user_id){
        $data = DB::table('search')->where('user_id','=',$user_id)->select('created_at', 'input_value')->get();
        $dataset = [
            'status'=>'success',
            'user_id'=>$user_id,
            'payload'=> $data
        ];
        return response()->json($dataset,200);
    }
}
