<?php
    class EntityAuthor {
        public $id;
        public $name;
        public $address;
        public $email;
        public $phone;
        public $created;
        public $modified;
        
        public function authorConstruct($id, $name, $address, $email, $phone, $created, $modified){
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
            $this->phone = $phone;
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
    
        public function createAuthor($name, $address, $email){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("INSERT INTO AUTHOR(name, address,email) VALUE('$name', '$address', '$email')");
            mysqli_close($connect);
            return $result;
        }
        public function updateAuthor(){
    
        }
        public function deleteAuthor(){
          
        }
    }
?>