<?php
    include_once("../models/book.php");

    class ControllerBook {
        public function invoke(){
            $modelBook = new ModelBook;
        }
        public function createBook(){
            $modelBook = new ModelBook;
            $result = $modelBook->createBook();
        }
        public function deleteBook(){
            $modelBook = new ModelBook;
            $result = $modelBook->deleteBook();
        }
        public function updateBook(){
            $modelBook = new ModelBook;
            $result = $modelBook->updateBook();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["createBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->createBook();
        }
        if(isset($_POST["deleteBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->deleteBook();
        }
        if(isset($_POST["updateBook"])){
            $controlBook = new ControllerBook;
            $result =$controlBook->updateBook();
        }
    }
?>