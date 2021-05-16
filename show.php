<!DOCTYPE html>
<html lang="ja">

<!-- _head.phpの読み込み -->

<body>
    <div class="wrapper show-wrapper">
        <h1 class="title"><a href="index.php">MyTube</a></h1>
        <h2><!-- VIDEOのタイトルの表示 --></h2>
        <p class="regi-date">登録日: <!-- VIDEOの登録日の表示 --></p>
        <div class="youtube">
            <iframe src="https://www.youtube.com/embed/<!-- VIDEOのIDの表示 -->" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p class="review"><!-- VIDEOのレビューの表示 --></p>
        <div class="btn-area">
            <a href="" class="btn edit-btn">EDIT</a>
            <a href="" class="btn delete-btn">DELETE</a>
            <a href="" class="btn return-btn">RETURN</a>
        </div>
    </div>
</body>

</html>