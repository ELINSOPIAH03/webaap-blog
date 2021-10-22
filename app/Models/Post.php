<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory; 
    use Sluggable;
    

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //$fillable var bawaan laravel, jadi yg di dalam array itu boleh di isi
    // protected $fillable = ['title','excerpt', 'body'];

    //kebalikan dari $fillable adalah $guarded jadi yang gak boleh di isi
    protected $guarded = ['id'];

    //pemisahan with
    protected $with=['author','category','user'];
    
    public function scopeFilter($query, array $filters)
    {
        
        //cara 1 ribet
        // if (isset($filters['search']) ? ($filters['search']) : false) {
        //     return $query->where('title','like','%' . $filters['search'] . '%')
        //     ->orWhere('excerpt','like','%' . $filters['search'] . '%');
        // }
        
        //cara 2
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title_blog','like','%' . $search . '%')
            ->orWhere('excerpt','like','%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username',$author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function author ()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    
}
