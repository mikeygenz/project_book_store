<?php
    class EntityAuthor {
        public $id;
        public $name;
        public $address;
        public $email;
        public $nationality;
        public $created;
        public $modified;
        
        public function authorConstruct($id, $name, $address, $email, $nationality, $created, $modified){
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
            $this->nationality = $nationality;
            $this->created = $created;
            $this->modified = $modified;
        }
    }
    class ModelAuthor {
        public function authorConstruct(){}
        public function getAuthor(){
            $connect = new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("SELECT * FROM AUTHOR");
            mysqli_close($connect);
            return $result;
        }
        public function getAuthorDetail($id){
            $connect = new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("SELECT * FROM AUTHOR WHERE AUTHOR.id='$id'");
            mysqli_close($connect);
            return $result;
        }
        public function createAuthor($name, $address, $email){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("INSERT INTO AUTHOR(name, address,email) VALUE('$name', '$address', '$email')");
            mysqli_close($connect);
            return $result;
        }
        public function updateAuthor($id, $name, $address, $email, $nationality){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("UPDATE AUTHOR SET AUTHOR.name='$name', AUTHOR.address='$address', AUTHOR.email='$email', AUTHOR.nationality='$nationality' WHERE AUTHOR.id='$id'");
            mysqli_close($connect);
            return $result;
        }
        public function deleteAuthor($id){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("DELETE FROM AUTHOR WHERE AUTHOR.id='$id'");
            mysqli_close($connect);
            return $result;     
        }
    }
?>