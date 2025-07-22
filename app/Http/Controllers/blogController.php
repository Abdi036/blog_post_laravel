<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function index(){
        $posts = blog::orderBy('created_at', 'desc')->get();
   
        return view('blogs.index',['posts'=> $posts]);
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
}
