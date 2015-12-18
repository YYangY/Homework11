<?php
class calculator{
    public $a;
    public $b;
    public $c;
    function __construct($num1, $num2){
        $this->a = $num1;
        $this->b = $num2;
    }
    function add(){
        $this->c = $this->a + $this->b;
        echo "计算结果是:".$this->c;
    }
    function substract(){
        $this->c = $this->a - $this->b;
        echo "计算结果是:".$this->c;
    }
    function multiply(){
        echo "计算结果是:".$this->a * $this->b;
    }
    function divide(){
        if($this->b == 0) {
            echo "计算结果是:wrong";
        } else {
            echo "计算结果是:".$this->a / $this->b;
        }
    }
}
$num1 = $_POST["num1"]; 
$num2 = $_POST["num2"]; 
$p = new calculator($num1, $num2);
$oper=$_POST["oper"]; 
switch($oper){ 
	case "+":
	$p->add();
    break; 
    case "-":
    $p->substract(); 
    break; 
    case "*":
    $p->multiply(); 
    break; 
    case "/": 
    $p->divide(); 
    break;  
}
?>