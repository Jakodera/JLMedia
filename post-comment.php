<?php
session_start();
require('./includes/db.inc.php'); // Include your database connection code here

if (isset($_POST['comment_text']) && isset($_POST['article_id']) && isset($_SESSION['USER_ID'])) {
    $comment_text = mysqli_real_escape_string($con, $_POST['comment_text']);
    $article_id = mysqli_real_escape_string($con, $_POST['article_id']);
    $user_id = $_SESSION['USER_ID'];

    $insertCommentQuery = "INSERT INTO comments (article_id, user_id, comment_text) VALUES ($article_id, $user_id, '$comment_text')";

    if (mysqli_query($con, $insertCommentQuery)) {
        // Comment inserted successfully
        header("Location: article.php?id=$article_id");
    } else {
        // Handle the error
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Handle invalid input or unauthorized access
    echo "Invalid input or unauthorized access.";
}
?>
