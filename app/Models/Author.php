<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $dates = ['deleted_at'];

    protected $table = 'authors';

    protected $fillable = ['name'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function books()
    {
        return $this->hasMany('App\Models\Book','author_id', 'id');
        return $this->hasMany(Book::class);
    }



}
