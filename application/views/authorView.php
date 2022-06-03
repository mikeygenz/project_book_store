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
        <div>
            <form action="../views/authorAdd.php" method="post">
                <button type="submit" >Add Author</button>
            </form>
        </div>
    <div class="view-author">
        <table>
            <tr>
                <th>Tên tác giả </th>
                <th>Địa chỉ</th>
                <th>Địa chỉ email</th>
                <th>Quoc tich</th>
                <th>Ngày tạo</th>
                <th>???</th>
                <th>???</th>
            </tr>
            <?php
            include_once("../controllers/adminAuthorController.php");
            $controlAuthor = new ControllerAuthor;
            $authorList = $controlAuthor->getAuthor();
            if ($authorList->num_rows > 0) {
                $i = 0;
                while ($row = $authorList->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["nationality"]; ?></td>
                        <td><?php echo $row["created"]; ?></td>
                        <td><?php echo $row["modified"]; ?></td>
                        <td>
                            <form action="../views/authorEdit.php" method="post">
                                <input style="display:none" type="text" id="editAuthor" name="editAuthor" value="<?php echo $row["id"]; ?>">
                                <button type="submit"> Edit </button>
                            </form>
                        </td>
                    </tr>
            <?php
                    $i++;
                }
            } else {
                echo "No result found";
            }
            ?>

        </table>
    </div>
</body>

</html>