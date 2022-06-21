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
            <form action="../views/bookAdd.php" method="post">
                <button type="submit" >Add Book</button>
            </form>
        </div>
    <div class="view-book">
        <table>
            <tr>
                <th>Tên sách </th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Thể loại</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Ngày nhập</th>
                <th>???</th>
            </tr>
            <?php
            include_once("../controllers/adminBookController.php");
            $controlBook = new ControllerBook;
            $bookList = $controlBook->getBook();
            if ($bookList->num_rows > 0) {
                $i = 0;
                while ($row = $bookList->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["author_id"]; ?></td>
                        <td><?php echo $row["publisher_id"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["created"]; ?></td>
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