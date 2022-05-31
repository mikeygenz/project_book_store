<?php
    class EntityAuthor {
        public $id;
        public $name;
        public $address;
        public $email;
        public $phone;
        public $created;
        public $modified;
        
        public function author_construct($id, $name, $address, $email, $phone, $created, $modified){
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
            $this->phone = $phone;
            $this->created = $created;
            $this->modified = $modified;
        }
    }
?>