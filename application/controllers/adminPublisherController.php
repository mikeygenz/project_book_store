<?php
    include_once("../models/publisher.php");
    class ControllerPublisher {
        public function createPublisher($name, $address, $email, $phone){
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->createPublisher($name, $address, $email, $phone);
        }
        public function deletePublisher($id) {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->deletePublisher($id);
        }
        public function updatePublisher($id,$name, $address, $email, $phone) {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->updatePublisher($id,$name, $address, $email, $phone);
        }
        public function getPublisher() {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->getPublisher();
            return $result;
        }
        public function getPublisherDetail($id) {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->getPublisherDetail($id);
            return $result;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["createPublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->createPublisher($_POST["name"], $_POST["address"], $_POST["email"], $_POST["phone"]);
            header("Location: ../views/publisherView.php");
            exit;
        }
        if(isset($_POST["deletePublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->deletePublisher($_POST["id"]);
            header("Location: ../views/publisherView.php");
            exit;
        }
        if(isset($_POST["updatePublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->updatePublisher($_POST["id"],$_POST["name"], $_POST["address"], $_POST["email"], $_POST["phone"]);
            header("Location: ../views/publisherView.php");
            exit;
        }
        if(isset($_POST["getPublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->getPublisher();
        }
    }
?>