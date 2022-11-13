<?php 

//create book class to read info in Library database
class Book {

    public $book_id;
    public $title;
    public $author;
    public $author_id;
    public $genre;
    public $ages;
    public $year;
    public $image;

    public function __construct($book_id, $title, $author, $author_id, $genre, $ages, $year, $image)
    {
        $this->book_id = $book_id;
        $this->title = $title;
        $this->author = $author;
        $this->author_id = $author_id;
        $this->genre = $genre;
        $this->ages = $ages;
        $this->year = $year;
        $this->image = $image;
        
    }


}