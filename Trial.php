<?php
class Student {
  public $name;
  public $id;
  public function __construct($name, $id) {
    $this->name = $name;
    $this->id = $id;
  }
  public function intro() {
    echo "Name: {$this->name} and the ID is {$this->id}.";
  }
}
$S = new Student("Gaurav", "2019120046");
$S->intro();
?>
