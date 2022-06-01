<?php
  class EntityBook {
    public $id;
    public $author_id;
    public $publisher_id;
    public $price;
    public $quantity;
    public $type ;
    public $name ;
    public $created ;
    public $description ;

    public function bookConstruct($id, $author_id, $publisher_id, $price, $quantity,
                                    $type, $name, $created, $description) {
        $this->id = $id;
        $this->author_id = $author_id;
        $this->publisher_id = $publisher_id ;
        $this->price = $price ;
        $this->quantity = $quantity;
        $this->type = $type;
        $this->name = $name ;
        $this->created = $created;
        $this->description = $description;
    }
  }
  
  class ModelBook {
    public function bookConstruct(){}
    
    public function createBook(){

    }
    public function updateBook(){

    }
    public function deleteBook(){

    }
  }