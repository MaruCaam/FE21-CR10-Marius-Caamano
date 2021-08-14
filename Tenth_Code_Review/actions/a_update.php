<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $books_Id = $_POST['books_Id'];
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

    $picture = file_upload($_FILES['picture']);
    if ($picture->error === 0) {
        ($_POST["picture"] == "product.png") ?: unlink("../pictures/$_POST[picture]");
        $sql = "UPDATE `media` SET `books_Id` = '$books_Id',`book_title` = '$book_title', `author_f_name` = '$author_f_name', `author_l_name` = '$author_l_name', `ISBN` = '$ISBN', `description` = '$description', `published_date` = '$published_date', `type` = '$type', `book_status` = '$book_status', `picture` = '$picture->fileName', `publisher_name` = '$publisher_name', `publisher_address` = '$publisher_address' WHERE books_Id = {$books_Id}";
    } else {
        $sql = "UPDATE `media` SET `books_Id` = '$books_Id', `book_title` = '$book_title', `author_f_name` = '$author_f_name', `author_l_name` = '$author_l_name', `ISBN` = '$ISBN', `description` = '$description', `published_date` = '$published_date', `type` = '$type', `book_status` = '$book_status', `publisher_name` = '$publisher_name', `publisher_address` = '$publisher_address' WHERE books_Id = {$books_Id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../update.php?books_Id=<?= $books_Id; ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>