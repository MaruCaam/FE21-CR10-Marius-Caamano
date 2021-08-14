<?php
require_once "db_connect.php";
require_once "file_upload.php";

if ($_POST) {
    // $books_Id = $_POST['books_Id'];       
    $book_title = $_POST['book_title'];
    $author_f_name = $_POST['author_f_name'];
    $author_l_name = $_POST['author_l_name'];
    $ISBN = $_POST['ISBN'];
    $description = $_POST['description'];
    $published_date = $_POST['published_date'];
    $type = $_POST['type'];
    $book_status = $_POST['book_status'];
    $picture = file_upload($_FILES['picture']);
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];

    $uploadError = '';

    $sql = "INSERT INTO media(`book_title`, `author_f_name`, `author_l_name`, `ISBN`, `description`, `published_date`, `type`, `book_status`, `picture`, `publisher_name`, `publisher_address`) VALUES ('$book_title', '$author_f_name', '$author_l_name', '$ISBN', '$description', '$published_date','$type', '$book_status','$picture->fileName', '$publisher_name', '$publisher_address' )";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $book_title  </td>
            <td> $author_f_name </td>
            </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <?php require_once '../components/boot.php' ?>
    <link rel="stylesheet" type="text/css" href="/components/style.css">
</head>

<body>

    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>