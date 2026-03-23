<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = [
            [
                "id" => 1,
                "title" => "Il nome della rosa",
                "author" => "Umberto Eco",
                "genre" => "Thriller",
                "price" => 20.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ],
            [
                "id" => 2,
                "title" => "Il signore degli anelli",
                "author" => "J.R.R. Tolkien",
                "genre" => "Fantasy",
                "price" => 25.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ],
            [
                "id" => 3,
                "title" => "Il vecchio e il mare",
                "author" => "Ernest Hemingway",
                "genre" => "Romanzo",
                "price" => 15.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ],[
                "id" => 4,
                "title" => "Il piccolo principe",
                "author" => "Antoine de Saint-Exupéry",
                "genre" => "Fiaba",
                "price" => 10.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ]
        ];
        return view('books.bookList', ["books"=>$books]);
    }

    public function details($bookId) {
        $book = [
                "id" => 1,
                "title" => "Il nome della rosa",
                "author" => "Umberto Eco",
                "genre" => "Thriller",
                "price" => 20.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ];
        return view('books.bookDetails', ["book"=>$book]);
    }


    public function viewForm($bookId = null) {
        $book=[
                "id" => null,
                "title" => null,
                "author" => null,
                "genre" => null,
                "price" => null,
                "image" => null
            ];
        if($bookId){
            $book = [
                "id" => $bookId,
                "title" => "Il nome della rosa",
                "author" => "Umberto Eco",
                "genre" => "Thriller",
                "price" => 20.00,
                "image" => "https://images.unsplash.com/photo-1541963463532-d68292c34b19?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicm98ZW58MHx8MHx8fDA%3D"
            ];
        }
        return redirect()->route('book.index');
        // return view('books.bookForm', ["book"=>$book]);
    }



    // Input data of the book to create
    public function createBook(){
        return "This function should create the book";
    }

    // Input data of the book to edit + $idBook
    public function editBook(){

        return "This function should edit the book";
    }

    public function deleteBook($bookId){

        return "This function should delete the book";
    }
}
