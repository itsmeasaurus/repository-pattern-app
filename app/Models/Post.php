<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function format()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author->name,
            'published_at' => $this->created_at->diffForHumans()
        ];
    }
}
