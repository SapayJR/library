<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    const STATUS = [
      'Created',
      'Approved'
    ];
    const TYPES = [
        'Published',
        'Not published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Author()
    {
        return $this->belongsTo(User::class);
    }

}
