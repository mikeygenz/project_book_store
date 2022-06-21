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

    <div class="add-author">
        <form action="../controllers/adminBookController.php" method="post">
            <div>
                <label for="name">Name: </label>
                <input 
                    type="text"
                    id="name"
                    name="name"
                    />
            </div>

            <div>
                <label for="author">Author: </label>
                <input 
                    type="text"
                    id="author"
                    name="author"
                    />
            </div>
            <div>
                <label for="publisher">Publisher: </label>
                <input 
                    type="text"
                    id="publisher"
                    name="publisher"
                    />
            </div>

            <div>
                <label for="type">Type: </label>
                <input 
                    type="text"
                    id="type"
                    name="type"
                    />
            </div>
            <div>
                <label for="description">Description: </label>
                <input 
                    type="text"
                    id="description"
                    name="description"
                    />
            </div>

            <div>
                <label for="price">Price: </label>
                <input 
                    type="text"
                    id="price"
                    name="price"
                    />
            </div>
            
            <div>
                <label for="quantity">Quantity: </label>
                <input 
                    type="text"
                    id="quantity"
                    name="quantity"
                    />
            </div>
            <div>
                <label for="created">Created: </label>
                <input 
                    type="text"
                    id="created"
                    name="created"
                    />
            </div>
            <button type="submit" name="createBook">Save</button>
        </form>
    </div>
</body>

</html>