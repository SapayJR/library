<?php

namespace App\Repositories\User;

use App\Models\Book;

class BookRepository
{
    public function getBooks($id) {
        return Book::where('id', $id)->first();
    }

}
