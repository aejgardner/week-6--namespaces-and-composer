<?php 

use Illuminate\Support\Collection;

namespace App\Library;

class Shelf
{
    private $addedBooks; 

    public function __construct()
    {
        $this->addedBooks = collect(); // if you make a property a collection to start with, you don't need to turn it into one just before you use iterator methods that come with collections
    }

    public function addBook(Book $book) : Shelf
    {
        $this->addedBooks->push($book);
        return $this;
    }

    public function titles() : array
    {
        return $this->addedBooks->map(function (Book $book) : string { // the function passed as the argument is returning a string each time (each book title)
            return $book->getTitle();
        })->all(); // all() turns collection back into array
    }
}