<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['title',  'description', 'content', 'image', 'category_id', 'user_id', 'published_at'];


    protected $dates = [
        'published_at'
    ];

    //delet image from storage
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //only display posts which have been published
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }
}
