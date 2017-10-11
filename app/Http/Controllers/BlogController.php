<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Blog;

class BlogController extends Controller
{
    public function show(){
        $blogs = DB::table('blogs')
                         ->latest()
                         ->SimplePaginate(2);
        $artikels = DB::table('blogs')
                            ->latest()
                            ->limit(3)
                            ->get();
    return view('/hidepok/blog', ['blogs' => $blogs, 'artikels' => $artikels]);
    }

    public function show2($id_blog){
    $blog = Blog::where('id_blog', $id_blog)->first();

    return view('/hidepok/blog/viewblog', ['blog' => $blog]);
    }
}
