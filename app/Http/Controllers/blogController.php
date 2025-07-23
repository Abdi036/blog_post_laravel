<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function index(){
        $blogs = blog::orderBy('created_at', 'desc')->paginate(10);

        return view('blogs.index',['blogs'=> $blogs]);
    }
    public function show($id){
        $blog = blog::findOrFail($id);
        return view('blogs.blog', ['blog' => $blog]);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required|min:20',
        ]);

        blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function destroy($id){
        $blog = blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
   
}
