<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BorrowLog extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
