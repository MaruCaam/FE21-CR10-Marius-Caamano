<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Add Products to the list</title>
    <link rel="stylesheet" type="text/css" href="/components/style.css"> 
   
</head>

<body>
    <header>
        <?php
        include_once 'components/navbar.php';
        ?>
    </header>


    <fieldset>
        <legend class='h2'>Add Product</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="book_title" placeholder="Book Title" /></td>
                </tr>
                <tr>
                    <th>Author First Name</th>
                    <td><input class='form-control' type="text" name="author_f_name" placeholder="Author first Name" step="any" /></td>
                </tr>
                <tr>
                    <th>Author Last Name</th>
                    <td><input class='form-control' type="text" name="author_l_name" placeholder="Author last Name" step="any" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN" step="any" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" placeholder="Description" step="any" /></td>
                </tr>
                <tr>
                    <th>Date published</th>
                    <td><input class='form-control' type="date" name="published_date" placeholder="Publish date" step="any" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><select class='form-select' type="text" name="type" placeholder="Status" step="any">
                            <option selected>Choose...</option>
                            <option value="1">Paperback</option>
                            <option value="2">Hardcover</option>
                            <option value="3">Softcover</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><select class='form-select' type="text" name="book_status" placeholder="Status" step="any">
                            <option selected>Choose...</option>
                            <option value="1">Available</option>
                            <option value="2">Reserved</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" step="any" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" step="any" /></td>
                </tr>

                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
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