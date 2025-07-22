<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function index(){
        $blogs = blog::orderBy('created_at', 'desc')->paginate(10);;

        return view('blogs.index',['blogs'=> $blogs]);
    }
    public function show($id){
        $blog = blog::findOrFail($id);
        return view('blogs.blog', ['blog' => $blog]);
    }

    public function create(){
        return view('blogs.create');
    }
   
}
