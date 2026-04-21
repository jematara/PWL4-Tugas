<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function bookshelf(){
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id', 'id');
    }

    public function loanDetail(){
        return $this->hasMany(LoanDetail::class, 'book_id', 'id');
    }
}
