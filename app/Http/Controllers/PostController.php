<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $name_halaman='';
        if (request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $name_halaman = ' in '.$category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username',request('author'));
            $name_halaman = ' by '.$author->name;
        }
        return view('posts',[
            "title" => "All Posts".$name_halaman,
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()//filter diambil dari scope//paginate buat paginetion bawaan dari laravel 
            ]);
    }

    // menggunakan cara roteu model binding
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", 
            "post" => $post
        ]);
    }

    

    
    //cara yang biasanya selain route model binding
    // public function show($id)
    // {
    //     return view('post', [
    //         "title" => "Single Post", 
    //         "post" => Post::find($id)
    //     ]);
    // }
    //dan di model web.php {post} diganti {id}/{slug}


}
