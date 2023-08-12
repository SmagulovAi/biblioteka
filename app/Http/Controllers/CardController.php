<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class CardController extends Controller
{
    public function showCard($bookId) {
        $bookId = Book::find($bookId);
        return view('card', ['bookId' => $bookId]);
    }
}
