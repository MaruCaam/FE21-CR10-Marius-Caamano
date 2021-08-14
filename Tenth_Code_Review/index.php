<?php
require_once "actions/db_connect.php";

$sql = "SELECT * FROM media";

$result = mysqli_query($connect, $sql);
$body = "";
// var_dump(mysqli_num_rows($result));
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $body .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" . $row["picture"] . "'</td>
            <td>" . $row["book_title"] . "</td>
            <td>" . $row["author_f_name"] . "</td>
            <td>" . $row["author_l_name"] . "</td>
            <td>" . $row["ISBN"] . "</td>
            <td>" . $row["description"] . "</td>
            <td>" . $row["published_date"] . "</td>
            <td>" . $row["type"] . "</td>
            <td>" . $row["book_status"] . "</td>
            <td>" . $row["publisher_name"] . "</td>
            <td>" . $row["publisher_address"] . "</td>
            


            <td><a href='update.php?books_Id=" . $row["books_Id"] . "'><button class='btn btn-success btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?books_Id=" . $row["books_Id"] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $body =  "<tr><td colspan='5'><center>No results </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>
    <?php require_once "components/boot.php"; ?>
    <link rel="stylesheet" type="text/css" href="/components/style.css">

</head>

<body>

    <header>
        <?php
        include_once 'components/navbar.php';
        ?>
    </header>

    <div class="manageProduct w-100 mt-3">
        <!-- <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add product to the list</button></a>
        </div> -->
        <p class='h2 text-center my-4'>Products</p>
        <table class='table table-striped'>
            <thead class='table-light'>
                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Author's first name</th>
                    <th>Author's last name</th>
                    <th>ISBN</th>
                    <th>Description</th>
                    <th>Date published</th>
                    <th>Cover</th>
                    <th>Status</th>
                    <th>Publisher</th>
                    <th>Publisher Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?= $body; ?>
            </tbody>
        </table>
    </div>
    <footer>
        <?php
        include_once 'components/footer.php';
        ?>
    </footer>
</body>

</html>