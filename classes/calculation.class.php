<?php

class Calculation{

    //properties
    public $operator;
    public $operand1;
    public $operand2;

    //constructor
    public function __construct(string $opt,int $opr1, int $opr2){
        $this->operator = $opt;
        $this->operand1 = $opr1;
        $this->operand2 = $opr2;
    }

    //methods
    public function calculate(){
        switch($this->operator){
            case 'add':
                $result = $this->operand1 + $this->operand2;
                return $result;
                break;

            case 'sub':
                $result = $this->operand1 - $this->operand2;
                return $result;
                break;

            case 'mul':
                $result = $this->operand1 * $this->operand2;
                return $result;
                break;

            case 'div':
                $result = $this->operand1 / $this->operand2;
                return $result;
                break;

            default:
                echo "Error!";
                break;

        }
    }
    
}