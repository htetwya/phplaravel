<?php

 class Calculator{

  private $num1;
  private $num2;
  private $operator;

  public function __construct(int $num1,int $num2,$operator){
    
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->operator = $operator;
  }

  public function calculate(){
    
    switch ($this->operator){
    
      case "add":
        $result = $this->num1 + $this->num2;
        return $result;
        break;
      case "subtract":
        $result = $this->num1 - $this->num2;
        return $result;
        break;
      case "multiply":
        $result = $this->num1 * $this->num2;
        return $result;
        break;
      case "divide":
        $result = $this->num1 / $this->num2;
        return $result;
        break;
      default:
        echo "error";
        break;
    
    }
  }
  
  
 }

?>