<?php
    include_once("../models/author.php");
    class ControllerAuthor {
        public function createAuthor($name, $address, $email, $nationality){
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->createAuthor($name, $address, $email, $nationality);
            return $result;
        }
        public function deleteAuthor($id) {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->deleteAuthor($id);
        }
        public function updateAuthor($id, $name, $address, $email, $nationality) {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->updateAuthor($id, $name, $address, $email, $nationality);
        }
        public function getAuthor() {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->getAuthor();
            return $result;
        }
        public function getAuthorDetail($id) {
            $modelAuthor = new ModelAuthor;
            $result = $modelAuthor->getAuthorDetail($id);
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
            $result =$controlAuthor->createAuthor($_POST["name"], $_POST["address"], $_POST["email"], $_POST["nationality"]);
            header("Location: ../views/authorView.php");
            exit;
        }
        if(isset($_POST["deleteAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->deleteAuthor($_POST["id"]);
            header("Location: ../views/authorView.php");
            exit;
        }
        if(isset($_POST["updateAuthor"])){
            $controlAuthor = new ControllerAuthor;
            $result =$controlAuthor->updateAuthor($_POST["id"], $_POST["name"], $_POST["address"], $_POST["email"], $_POST["nationality"]);
            header("Location: ../views/authorView.php");
            exit;
        }

    }
