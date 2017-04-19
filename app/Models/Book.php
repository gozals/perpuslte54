<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function borrowLogs()
    {
        return $this->hasMany(BorrowLog::class);
    }
}
