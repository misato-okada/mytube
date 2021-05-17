<?php
require_once __DIR__ . '/config.php';

function connectDb()
{
    try {
        return new PDO(
            DSN,
            USER,
            PASSWORD,
            [PDO::ATTR_ERRMODE =>
            PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function insertValidate($title, $video_id, $review)
{
    $errors = [];

    if ($title == '') {
        $errors[] = MSG_TITLE_REQUIRED;
    }
    if ($video_id == '') {
        $errors[] = MSG_ID_REQUIRED;
    }
    if ($review == '') {
        $errors[] = MSG_REVIEW_REQUIRED;
    }
    return $errors;
}

function createNewReview($title, $video_id, $review)
{
    try {
        $dbh = connectDb();
        $sql = <<<EOM
        INSERT INTO
            videos
            (title, video_id, review)
        VALUES
            (:title, :video_id, :review);
        EOM;
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':video_id', $video_id, PDO::PARAM_STR);
        $stmt->bindParam(':review', $review, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function createErrMsg($errors)
{
$err_msg = "<ul class=\"errors\">\n";

    foreach ($errors as $error) {
    $err_msg .= "<li>" . h($error) . "</li>\n";
    }

    $err_msg .= "</ul>\n";

return $err_msg;
}
