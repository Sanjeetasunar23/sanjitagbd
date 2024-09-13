<?php
/*
$num=15;
if($num%15==0){
   echo "fizzbuzz";
}
if($num%3==0){
echo"fizz";
}
if($num%5==0){
echo"Buzz";
}
echo$num;*/
// $fizzbuzz="sanjita";
// $fizz="sanju";
// $buzz="sanjeeta";
// if($num%5 and $n%3){
//     echo $fizzbuzz;
//  }
//  if($num%5==0){
//  echo"fizz";
//  }
//  echo"Buzz";
//  if($num%3==0){
//  }
// $num=25;

function fizzBuzz ($num)
{
    if($num%5 == 0 && $num%3==0){
       return "fizzbuzz";
    }
    if($num%3==0){
        return "fizz";
    }
    if($num%5==0){
        return"Buzz";
    }

    return "wertyuio";

}
// fizzBuzz(150);
$result=fizzBuzz(15,'asd');
echo $result;
//azy => null
//sanz => empty

?>

<?php
// $n=8;
// function fibo($n) {
//     if ($n <= 1) {
//         return $n;
//     }
//     return fibo($n - 1) + fibo($n - 2);
// }
// echo "Fibonacci to $n terms: ";
// for ($i = 0; $i < $n; $i++) {
//     echo fibo($i) ;
//}
$n=8;
$x=0;
$y=1;
    echo $x . " ".$y . " ";
    for ($i = 0; $i < $n; $i++) {
    $z=$x+$y;
     echo$z ." ";
     $x=$y;
     $y=$z;}
?>



