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

    //getters and setters

    public function getBook_id()
    {
        return $this->book_id;
    }

    public function setBook_id($book_id)
    {
        $this->book_id = $book_id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function getAuthor_id()
    {
        return $this->author_id;
    }

    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;
        return $this;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    public function getAges()
    {
        return $this->ages;
    }

    public function setAges($ages)
    {
        $this->ages = $ages;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /* function borrowBook() {
        $_SESSION['books'] = [];
        $book = "SELECT * FROM books";

        foreach($book as $books) {

            $borrow = new Book (
                $books->id,
                $books->image,
                $books->title,
                $books->author,
                $books->author_id,
                $books->year,
                $books->genre,
                $books->ages,
            );

            $_SESSION['borrow'] = $borrow;
            array_push($_SESSION['books'], $borrow);
        }
    } */

}