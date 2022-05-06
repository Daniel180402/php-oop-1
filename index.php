<?php

    class Movie{
        protected $title;
        protected $releaseYear;
        protected $originalLanguage;

        function __construct($_title, $_releaseYear, $_originalLanguage){
            $this->setTitle($_title);
            $this->setReleaseYear($_releaseYear);
            $this->setOriginalLanguage($_originalLanguage);
        }

        public function setTitle($_title){
            if($_title != null){
                $this->title = $_title;
            }
        }

        public function setReleaseYear($_releaseYear){
            if(is_numeric($_releaseYear)){
                $this->releaseYear = $_releaseYear;
            }
        }

        public function setOriginalLanguage($_originalLanguage){
            if($_originalLanguage != null){
                $this->originalLanguage = $_originalLanguage;
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP First</title>
</head>
<body>
    <?php
        $batman = new Movie('Batman 5', '2023', 'en');
        var_dump($batman);
    ?>
</body>
</html>