<?php

class Movie {
   
    private $title;
    private $director;
    private $releaseYear;
    private $genre;
    private $duration;

  
    public function setMovie($title, $director, $releaseYear, $genre, $duration) {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
        $this->duration = $duration;
    }

   
    public function getMovieInfo() {
        return "Movie Title: $this->title\n" .
               "Director: $this->director\n" .
               "Release Year: $this->releaseYear\n" .
               "Genre: $this->genre\n" .
               "Duration: $this->duration minutes\n";
    }
}


$movie = new Movie();
$movie->setMovie("Inception", "Christopher Nolan", 2010, "Science Fiction", 148);
echo $movie->getMovieInfo();
?>
