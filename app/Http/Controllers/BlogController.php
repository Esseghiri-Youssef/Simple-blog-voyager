<?php

namespace App\Http\Controllers;

use App\Post, App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_At','desc')
                    ->take(6)
                    ->get();
        return view('Monblog.index',['myposts'=>$posts]);
    }

    public function blog($id=null){

        if($id){
            $posts = Post::whereStatus('published')
                    ->orderBy('created_At','desc')
                    ->whereCategoryId($id)
                    ->paginate(3);
        }else{
            $posts = Post::whereStatus('published')
                    ->orderBy('created_At','desc')
                    ->paginate(3);
            
        }

        $category = Category::all();
        return view('Monblog.blog',['id'=>$id,'myposts'=>$posts,'mycategory'=>$category]);

        
    }

    
}
