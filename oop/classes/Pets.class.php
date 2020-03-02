<?php

include 'Person.class.php';

class Pets extends Person{ //extend Person class

  public function getThree(){
    
    echo $this->three;
  }
  

}

?>