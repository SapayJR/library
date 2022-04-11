<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBook($id)
    {
        $item = Book::where('id', $id)->first();

        return view('home.books.show_books', compact('item'));
    }

    public function showCategory($cat_alias)
    {
        $cat = Category::where('alias', $cat_alias)->first();

        $books = Book::where('category_id', $cat->id)->get();


        return view('home.categories.show_categories', compact('cat','books'));

    }

}
