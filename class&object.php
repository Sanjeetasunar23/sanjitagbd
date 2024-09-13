   <?php
// class calculation{
//     public $a ,$b;

//     function sum(){
//         $c = $a + $b;
//         return $c;
//     }}
//   $c = new calculation(); 

//    $a=10;
//   $b=20;
//     echo "$c"sum();
    


class Calculation {
    public $a, $b;

    function __destruct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }
    function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }

    function sum() {
        echo $a;
        // return  $this->a + $this->b;
        // return $this->c;
    }
}

$c = new Calculation(1,2); 

// $c->a = 10; 
// $c->sum();  

echo "Sum value of c :" . $c->sum(); 

?>