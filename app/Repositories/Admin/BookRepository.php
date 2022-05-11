<?php

namespace App\Repositories\Admin;

use App\Models\Book;

class BookRepository
{

        public function getBooks() {
            return Book::orderBy('created_at', 'DESC')->get();
        }
}
