<?php
    class EntityPublisher {
        public $id;
        public $name;
        public $address;
        public $email;
        public $phone ;
        public $created ;
        public $modified ;

        public function publisherConstruct($id, $name, $address, $email, $phone,
                                            $created, $modified){
            $this->id = $id;
            $this->name= $name;
            $this->address =$address;
            $this->email = $email;
            $this->phone = $phone;
            $this->created = $created;
            $this->modified = $modified;
        }
    }

    class ModelPublisher {
        public function publishConstruct(){}
        public function getPublisher(){
            $connect = new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("SELECT * FROM PUBLISHER");
            mysqli_close($connect);
            return $result;
        }
        public function getPublisherDetail($id){
            $connect = new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("SELECT * FROM PUBLISHER WHERE PUBLISHER.id='$id'");
            mysqli_close($connect);
            return $result;
        }
        public function createPublisher($name, $address, $email, $phone){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("INSERT INTO PUBLISHER(name, address,email, phone) VALUE('$name', '$address', '$email','$phone')");
            mysqli_close($connect);
            return $result;
        }
        public function updatePublisher($id, $name, $address, $email, $phone){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("UPDATE PUBLISHER SET PUBLISHER.name='$name', PUBLISHER.address='$address', PUBLISHER.email='$email', PUBLISHER.phone='$phone' WHERE PUBLISHER.id='$id'");
            mysqli_close($connect);
            return $result;
        }
        public function deletePublisher($id){
            $connect =new mysqli("127.0.0.1", "root", "", "book_store");
            $result = $connect->query("DELETE FROM PUBLISHER WHERE PUBLISHER.id='$id'");
            mysqli_close($connect);
            return $result;  
        }
      }

?>