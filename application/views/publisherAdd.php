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

    <div class="add-publisher">
        <form action="../controllers/adminPublisherController.php" method="post">
            <div>
                <label for="name">Name: </label>
                <input 
                    type="text"
                    id="name"
                    name="name"
                    />
            </div>

            <div>
                <label for="address">Address: </label>
                <input 
                    type="text"
                    id="address"
                    name="address"
                    />
            </div>
            <div>
                <label for="email">Email: </label>
                <input 
                    type="text"
                    id="email"
                    name="email"
                    />
            </div>
            <div>
                <label for="phone">Phone: </label>
                <input 
                    type="text"
                    id="phone"
                    name="phone"
                    />
            </div>     
            <button type="submit" name="createPublisher">Save</button>
        </form>
    </div>
</body>

</html>