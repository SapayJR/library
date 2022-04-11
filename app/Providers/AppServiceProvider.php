<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::orderBy('id')->get();
         View::share([
             'categories' => $categories
         ]);

         $books = Book::orderBy('id')->get();
         View::share([
            'books' => $books
         ]);
    }
}
