<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Repositories\User\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }


    public function showBook($id)
    {
        $item = $this->bookRepository->getBooks($id);

        return view('home.books.show_books', compact('item'));
    }

    public function showCategory($cat_alias)
    {
        $books = Book::whereHas('category', function ($q) use($cat_alias) {
            $q->where('alias', $cat_alias);
        })->get();

        return view('home.categories.show_categories', compact('cat','books'));
    }

    public function changeStatus($id,$status)
    {
        $status = $status == 'approved' ? 'created' : 'approved';
        Book::findOrFail($id)->update(['status' => $status]);
        return redirect()->route('book.index');
    }



}
