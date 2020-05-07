<?php

namespace App\Library;

class Book 
{
    private $title;
    private $pages;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
        $this->currentPage = 1;
    }

    public function read(int $pagesRead) : Book // because "this" is an object of the type Book, you are returning the name of the object, in this case, Book
    {
        $this->currentPage += $pagesRead;
        return $this;
    } 

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function getTitle() : string
    {
        return $this->title;
    }
}