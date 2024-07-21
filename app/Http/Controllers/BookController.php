<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $categories = DB::table('categories')->get();

        $query = $request->input('query');
        
        if ($query) {
            $newBooks = DB::table('books')
                ->where('title', 'like', "%$query%")
                ->orderBy('publication', 'desc')
                ->take(8)
                ->get();
            $bestSellingBooks = DB::table('books')
                ->where('title', 'like', "%$query%")
                ->orderBy('quantity', 'desc')
                ->take(8)
                ->get();
        } else {
            $newBooks = DB::table('books')
                ->orderBy('publication', 'desc')
                ->take(8)
                ->get();
            $bestSellingBooks = DB::table('books')
                ->orderBy('quantity', 'desc')
                ->take(8)
                ->get();
        }

        return view('home', compact('categories', 'newBooks', 'bestSellingBooks'));
    }

    public function showByCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        $books = DB::table('books')->where('category_id', $id)->get();

        return view('category', compact('category', 'books'));
    }

    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        return view('book', compact('book'));
    }
}
