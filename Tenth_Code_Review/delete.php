<?php
require_once 'actions/db_connect.php';

if ($_GET['books_Id']) {
    $books_Id = $_GET['books_Id'];
    $sql = "SELECT * FROM media WHERE books_Id = {$books_Id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $books_Id = $data['books_Id'];
        $book_title = $data['book_title'];
        $author_f_name = $data['author_f_name'];
        $author_l_name = $data['author_l_name'];
        $ISBN = $data['ISBN'];
        $description = $data['description'];
        $published_date = $data['published_date'];
        $type = $data['type'];
        $book_status = $data['book_status'];
        $picture = $data['picture'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>

    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type="text/css" href="/components/style.css">
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include_once 'components/navbar.php';
        ?>
    </header>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $book_title ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?php echo $book_title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="books_Id" value="<?php echo $books_Id ?>" />
            <input type="hidden" name="picture" value="<?php echo $picture ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>
    <footer>
        <?php
        include_once 'components/footer.php';
        ?>
    </footer>
</body>

</html>