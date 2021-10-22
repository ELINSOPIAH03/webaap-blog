<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories',[
            'title'=>'Post Categories',
            'category'=>Category::all()
        ]);
    }

    // public function showCategories(Category $category)
    // {
    //     return view('posts',[
    //         'title'=>"Post By Category : $category->name",
    //         'posts'=>$category->posts->load('category','author','user'),
    //     ]);
    // }
    
}
