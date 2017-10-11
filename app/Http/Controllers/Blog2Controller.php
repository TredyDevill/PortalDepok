<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blog2Controller extends Controller
{
    public function show2(){
       	$bloks = DB::table('blogs')
    					->latest()
    					->limit(3)
    					->get();
    return view('/hidepok/blog', ['blogs' => $bloks]);
    }
}
