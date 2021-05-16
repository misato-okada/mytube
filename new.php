<!DOCTYPE html>
<html lang="ja">

<!-- _head.phpの読み込み -->

<body>
    <div class="wrapper form-wrapper">
        <h1 class="title"><a href="index.php">MyTube</a></h1>
        <div class="form-area">
            <h2 class="sub-title">登録</h2>

                <ul class="errors">
                    <li></li><!-- エラーメッセージ表示 -->
                </ul>

            <form action="" method="post">
                <div class="input-area">
                    <label for="title">タイトル</label>
                    <input type="text" id="title" name="title">
                    <label for="video_id">動画ID</label>
                    <input type="text" id="video_id" name="video_id">">
                    <label for="review">レビュー</label>
                    <input type="text" id="review" name="review">
                </div>
                <div class="btn submit-btn">
                    <input type="submit" value="CREATE">
                </div>
            </form>
            <a href="" class="btn return-btn">RETURN</a>
        </div>
    </div>
</body>

</html>