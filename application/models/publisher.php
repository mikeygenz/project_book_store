<?php
    class EntityPublisher {
        public $id;
        public $name;
        public $address;
        public $email;
        public $nationality ;
        public $created ;
        public $modified ;

        public function publisher_construct($id, $name, $address, $email, $nationality,
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

?>