<?php

require_once __DIR__ . '/functions.php';


?>
<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.html' ?>

<body>
    <div class="wrapper">
        <h1 class="title"><a href="index.php">MyTube</a></h1>
        <a href="new.php" class="btn new-btn">NEW</a>
        <section class="movie-list">
            <div class="movie">
                <p class="movie-title"><a href=""><!-- タイトルを出力 --></a></p>
                <div class="youtube">
                    <iframe src="https://www.youtube.com/embed/<!-- ビデオIDを出力 -->" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>
</body>

</html>