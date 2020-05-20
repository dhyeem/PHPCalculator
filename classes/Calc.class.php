<?php 

class Calc {

    // properties
    public $operator ; 
    public $firstNumber;
    public $secondNumber; 


    //Methods

    public function __construct(string $one, int $two, int $three  )
    {
        $this->operator = $one; 
        $this->firstNumber = $two; 
        $this->secondNumber = $three ; 
    }

    public function calculator()
    {
        switch ($this->operator) 
        {
            case 'add':
                $result = $this->firstNumber + $this->secondNumber ; 
                return $result; 
                break;

            case 'sub':
                $result = $this->firstNumber - $this->secondNumber ;  
                return $result; 
                break;
                    
            case 'mul':
                $result = $this->firstNumber * $this->secondNumber ; 
                return $result; 
                break;
        
            case 'div':
                $result = $this->firstNumber / $this->secondNumber ; 
                return $result; 
                break;
                        
            default:
               echo "Error!"; 
                break;
        }
    }
}