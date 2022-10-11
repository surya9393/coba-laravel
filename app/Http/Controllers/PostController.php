<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $title ='';
        if(request('category')){
            $category=Category::firstWhere('slug', request('category'));
            $title= ' in '. $category->name;
        }
        if(request('author')){
            $author=User::firstWhere('username', request('author'));
            $title= ' by '. $author->name;
        }
        
        return view('pages.blog',[
            "title" => "All Post". $title,
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('pages.post',[
            "title" => "Detail Post",
            "post" => $post
        ]);
    }
}
