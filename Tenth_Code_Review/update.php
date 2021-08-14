<?php
require_once 'actions/db_connect.php';

if ($_GET['books_Id']) {
    $books_Id = $_GET['books_Id'];
    $sql = "SELECT * FROM media WHERE books_Id = {$books_Id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
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
<html>

<head>
    <title>Edit Product</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type="text/css" href="/components/style.css">
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
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
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $picture ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="book_title" placeholder="Title" value="<?php echo $book_title ?>" /></td>
                </tr>
                <tr>
                    <th>Author First Name</th>
                    <td><input class="form-control" type="text" name="author_f_name" step="any" placeholder="Author First Name" value="<?php echo $author_f_name ?>" /></td>
                </tr>
                <tr>
                    <th>Author Last Name</th>
                    <td><input class="form-control" type="text" name="author_l_name" placeholder="Author Last Name" value="<?php echo $author_l_name ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class="form-control" type="text" name="ISBN" placeholder="ISBN" value="<?php echo $ISBN ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class="form-control" type="text" name="description" placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>
                <tr>
                    <th>Published Date</th>
                    <td><input class="form-control" type="text" name="published_date" placeholder="Published Date" value="<?php echo $published_date ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><select class="form-select" type="text" name="type" placeholder="Type" value="<?php echo $type ?>" />
                        <option selected>Choose...</option>
                        <option value="1">Paperback</option>
                        <option value="2">Hardcover</option>
                        <option value="3">Softcover</option>

                    </td>
                </tr>

                <tr>
                    <th>Book Status</th>
                    <td><select class="form-select" type="text" name="book_status" placeholder="Status" value="<?php echo $book_status ?>" />
                        <option selected>Choose...</option>
                        <option value="1">Available</option>
                        <option value="2">Reserved</option>
                    </td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class="form-control" type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input class="form-control" type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publisher_name ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class="form-control" type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisher_address ?>" /></td>
                </tr>


                <tr>
                    <input type="hidden" name="books_Id" value="<?php echo $data['books_Id'] ?>" />

                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <footer>
        <?php
        include_once 'components/footer.php';
        ?>
    </footer>
</body>

</html>