<?php
    include_once("../models/book.php");
    class ControllerBook {
        public function createBook($name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created){
            $modelBook = new ModelBook;
            $result = $modelBook->createBook($name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created);
            return $result;
        }
        public function deleteBook($id) {
            $modelBook = new ModelBook;
            $result = $modelBook->deleteBook($id);
        }
        public function updateBook($id, $name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created) {
            $modelBook = new ModelBook;
            $result = $modelBook->updateBook($id, $name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created);
        }
        public function getBook() {
            $modelBook = new ModelBook;
            $result = $modelBook->getBook();
            return $result;
        }
        public function getBookDetail($id) {
            $modelBook = new ModelBook;
            $result = $modelBook->getBookDetail($id);
            return $result;
        }
        public function invoke(){
            $modelBook = new ModelBook;

        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["getBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->getBook();
        }
        if(isset($_POST["createBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->createBook($_POST["name"], $_POST["author_id"], $_POST["publisher_id"], 
                                            $_POST["type"], $_POST["description"],$_POST["price"], $_POST["quantity"], $_POST["created"]);
            header("Location: ../views/bookView.php");
            exit;
        }
        if(isset($_POST["deleteBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->deleteBook($_POST["id"]);
            header("Location: ../views/bookView.php");
            exit;
        }
        if(isset($_POST["updateBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->updateBook($_POST["id"], $_POST["name"], $_POST["author_id"], $_POST["publisher_id"], $_POST["type"],
                                            $_POST["description"], $_POST["price"], $_POST["quantity"], $_POST["created"]);
            header("Location: ../views/bookView.php");
            exit;
        }

    }
?>