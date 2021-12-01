<?php
require_once "../data/albums.php";
// var_dump($albums);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Albums</title>
</head>

<body>
    <header>
        <div class="my-nav">
            <img class="logo" src="../img/spotify-logo-png.daf13776.png" alt="logo" />
        </div>
    </header>
    <main>
        <div class="container p-0">
            <div class="row row-cols-5 g-4">
                <?php
                foreach ($albums as $album) {
                    $albumPoster = $album["poster"];
                    $albumTitle = $album["title"];
                    $albumAuthor = $album["author"];
                    $albumYear = $album["year"];
                    include "../components/albumCard.php";
                }
                ?>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>