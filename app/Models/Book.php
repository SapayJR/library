<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id');
    }
    public function Author()
    {
        return $this->belongsTo('App\Models\User', 'name');
    }

    const TYPES = [
        'Published',
        'Not published'
    ];


}
