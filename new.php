<?php
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/config.php';

$title = '';
$video_id = '';
$review = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title');
    $video_id = filter_input(INPUT_POST, 'video_id');
    $review = filter_input(INPUT_POST, 'review');

    // バリデーション
    $errors = insertValidate($title, $video_id, $review);

    // エラーチェック
    if (empty($errors)) {
        createNewReview($title, $video_id, $review);
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.html' ?>

<body>
    <div class="wrapper form-wrapper">
        <h1 class="title"><a href="index.php">MyTube</a></h1>
        <div class="form-area">
            <h2 class="sub-title">NEW</h2>

            <ul class="errors">
                <li>
                    <?php if ($errors) echo (createErrMsg($errors)) ?>
                </li>
            </ul>

            <form action="" method="post">
                <div class="input-area">
                    <label for="title">タイトル</label>
                    <input type="text" id="title" name="title">
                    <label for="video_id">動画ID</label>
                    <input type="text" id="video_id" name="video_id">
                    <label for="review">レビュー</label>
                    <input type="text" id="review" name="review">
                </div>
                <div class="btn submit-btn">
                    <input type="submit" value="CREATE">
                </div>
            </form>
            <a href="index.php" class="btn return-btn">RETURN</a>
        </div>
    </div>
</body>

</html>