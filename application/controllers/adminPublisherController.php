<?php
    include_once("../models/publisher.php");
    class ControllerPublisher {
        public function createPublisher(){
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->createPublisher();
        }
        public function deletePublisher() {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->deletePublisher();
        }
        public function updatePublisher() {
            $modelPublisher = new ModelPublisher;
            $result = $modelPublisher->updatePublisher();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["createPublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->createPublisher();
        }
        if(isset($_POST["deletePublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->deletePublisher();
        }
        if(isset($_POST["updatePublisher"])){
            $controlPublisher = new ControllerPublisher;
            $result =$controlPublisher->updatePublisher();
        }
    }
?>