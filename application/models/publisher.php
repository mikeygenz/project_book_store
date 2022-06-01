<?php
    class EntityPublisher {
        public $id;
        public $name;
        public $address;
        public $email;
        public $nationality ;
        public $created ;
        public $modified ;

        public function publisherConstruct($id, $name, $address, $email, $nationality,
                                            $created, $modified){
            $this->id = $id;
            $this->name= $name;
            $this->address =$address;
            $this->email = $email;
            $this->nationality = $nationality;
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
        public function createPublisher(){
    
        }
        public function updatePublisher(){
    
        }
        public function deletePublisher(){
          
        }
      }

?>