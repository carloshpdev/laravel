<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'id_author'];

    public function authors()
    {
        return $this->belongsTo(Author::class, 'id_author');
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
