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
    public function getBook(){
      $connect = new mysqli("127.0.0.1", "root", "", "book_store");
      $result = $connect->query("SELECT * FROM BOOK");
      mysqli_close($connect);
      return $result;
  }
  public function getBookDetail($id){
      $connect = new mysqli("127.0.0.1", "root", "", "book_store");
      $result = $connect->query("SELECT * FROM BOOK WHERE BOOK.id='$id'");
      mysqli_close($connect);
      return $result;
  }
  public function createBook($name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created){
      $connect =new mysqli("127.0.0.1", "root", "", "book_store");
      $result = $connect->query("INSERT INTO BOOK(name, author_id, publisher_id, type, description, price, quantity, created) VALUE('$name', '$author_id', '$publisher_id', '$type', '$descreption', '$price','$quanntity', '$created')");
      mysqli_close($connect);
      return $result;
  }
  public function updateBook($id, $name, $author_id, $publisher_id, $type, $descreption, $price,$quanntity, $created){
      $connect =new mysqli("127.0.0.1", "root", "", "book_store");
      $result = $connect->query("UPDATE BOOK SET BOOK.name='$name', BOOK.author_id='$author_id', BOOK.publisher_id='$publisher_id',
                                BOOK.type='$type', BOOK.descreption = '$descreption', BOOK.price = '$price',
                                BOOk.quantity = '$quanntity', BOOK.created = '$created'
                                WHERE BOOK.id='$id'");
      mysqli_close($connect);
      return $result;
  }
  public function deleteBook($id){
      $connect =new mysqli("127.0.0.1", "root", "", "book_store");
      $result = $connect->query("DELETE FROM BOOK WHERE BOOK.id='$id'");
      mysqli_close($connect);
      return $result;     
  }
  }