<?php
    include_once("../models/author.php");
    class ControllerAuthor {
        public function createAuthor($name, $address, $email){
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->createAuthor($name, $address, $email);
            return $result;
        }
        public function deleteAuthor() {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->deleteAuthor();
        }
        public function updateAuthor() {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->updateAuthor();
        }
        public function getAuthor() {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->getAuthor();
            return $result;
        }
        public function invoke(){
            $modelAuthor = new ModelAuthor;

        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["getAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->getAuthor();
        }
        if(isset($_POST["createAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->createAuthor($_POST["name"], $_POST["address"], $_POST["email"]);
            header("Location: ../views/authorView.php");
            exit;
        }
        if(isset($_POST["deleteAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->deleteAuthor();
        }
        if(isset($_POST["updateAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->updateAuthor();
        }
    }
?>