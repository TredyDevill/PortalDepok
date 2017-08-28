<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{


  public function searchti(Request $request){
    $searchti = $request->search_data;
    var x  = firebase.database().ref($searchti);
    x.on("value", function(s){
      console.log(s.key);
    })
    // $blogs = DB::table('blogs')->where('title', 'LIKE', '%'.$search.'%')->paginate(2);
    return view('/tempatibadah', ['name' => 'Result : ' .$searchti]);
  }
}
