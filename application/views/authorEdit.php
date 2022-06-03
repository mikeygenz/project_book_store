<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
    <style>
        table {
            width: 100%;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="list-functions">
        <a href="authorView.php">Author</a>
        <a href="publisherView.php">Publisher</a>
        <a href="bookView.php">Book</a>
    </div>
    <?php
    include_once("../controllers/adminAuthorController.php");
    $controlAuthor = new ControllerAuthor;
    $result = $controlAuthor->getAuthorDetail($_POST["editAuthor"]);
    $row = $result->fetch_assoc()
    ?>
    <div class="edit-author">
        <form action="../controllers/adminAuthorController.php" method="post">
            <div>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" value="<?php echo $row["name"] ?>" />
            </div>

            <div>
                <label for="address">Address: </label>
                <input type="text" id="address" name="address" value="<?php echo $row["address"] ?>" />
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" value="<?php echo $row["email"] ?>" />
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="text" id="nationality" name="nationality" value="<?php echo $row["nationality"] ?>" />
            </div>
            <input style="display:none" type="text" id="id" name="id" value="<?php echo $_POST["editAuthor"] ?>" />
            <button type="submit" name="updateAuthor">Save</button>
            <button type="submit" name="deleteAuthor">Delete</button>
        </form>
    </div>
</body>

</html>