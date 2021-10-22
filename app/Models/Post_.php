<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Elin Sopiah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde quam nihil quidem voluptatibus quas perferendis, libero odit voluptatum placeat reprehenderit delectus exercitationem eligendi accusamus error inventore amet numquam magni modi iure ab! Consequatur nulla ipsa minus impedit natus rerum, eligendi accusantium ipsum molestiae distinctio blanditiis facere fugiat. Quos delectus nisi tempora officiis vel dolor, a excepturi iste facere? Quas dolorem dicta ea eligendi ullam eaque cum minima, libero alias deleniti ut deserunt iusto tenetur culpa nulla fugit, quasi vitae aliquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nur Arifaah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum asperiores doloremque molestiae officiis, consequatur iste vitae. Hic labore deserunt quam, ipsum dolorum autem maiores corrupti nemo accusantium et quaerat esse explicabo. Commodi perspiciatis veritatis consequatur atque doloremque fugit, possimus voluptatem molestias explicabo quaerat voluptatum sint sequi dolorum necessitatibus fuga provident iure quo asperiores nesciunt. Explicabo architecto cumque deleniti natus, a voluptatum eligendi mollitia. Delectus ipsa repudiandae aperiam fugit molestias labore eaque sint nulla consequatur, est iure, error dolor pariatur omnis autem? Velit rem veniam consequuntur voluptas assumenda repellat aspernatur ea dolorum. Distinctio harum nam perferendis ut et, odio nemo facilis!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
