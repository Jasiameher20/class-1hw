<?php
//*php code
//* 3 greater number
// $a = 500;
// $b = 1000;
// $c = 6000;

// if ($a > $b && $a > $c) 
// {
//     echo "$a is greater number";
// }
// elseif($b > $a && $b > $c)
// {
//     echo "$b is greater number";
// }
// else
// {
//     echo "$c is greater number";
// }

//* 4 greater number
 $a = 500;
 $b = 1000;
 $c = 6000;
 $d = 7000;

 if ($a > $b && $a > $c && $a > $d) 
 {
     echo "$a is greater number";
 }
 elseif($b > $a && $b > $c && $b > $d)
 {
     echo "$b is greater number";
 }
 elseif($c > $a && $c > $b && $c > $d)
 {
     echo "$c is greater number";
 }
 else
 {
     echo "$d is greater number";
 }

// function calNumber($number){
//     $num = $number;
//     if($num > 0){
    
//       if($num%2 == 0){
//       echo "This $num is positive even number";
//     }else{
//         echo "This $num is positive odd number";
//     }
//     }elseif($num == 0){
//         echo"This is neutral $num";
//     }else{
//         echo"This is negetive $num";
//     }
// }

//  calNumber(109);


// $user_name = 'deniel';

// var_dump(ctype_alpha($user_name));

// $phone_number = 187473748902;
// var_dump(is_numeric($phone_number)) ;

//function authLogin($email, $psk){

    // $email ='jasiameher@gmail.com';
    // $psk = 'password';
//         //checking email
//     if($email == 'jasiameher@gmail.com' )
//     {
//         //checking password
//         if($psk == 'password'){
//             echo "You are logged in";
//         }else{
//             echo "You have entered a wrong password";
//         }
    
//     }
//     else{
//         echo "No email account found";
//     }
    
// }
// authLogin('jasiameher@gmail.com', 'password');

/**
 * LOAN = 10000
 * DURATION = 12
 * INTEREST = 10% OR 10/100 0R 0.1
 * PERMONTH = ? TK
 * BASE AMOUNT = 10000 / 12
 * PER MONTH INTEREST = 0.1 / 12
 * PER MONTH INTEREST FEE = (10000 / 12) * (0.1 / 12)
 * BASE AMOUNT + PER MONTH INTEREST FEE

 */



//  function calLoan($loan, $duration, $interest){
//       //$loan = 10000;
//       // $duration = 12;
//       //$interest = 0.1;
   
//      $base_amount =  $loan / $duration;
//      //echo $base_amount;
//      $per_month_interest_fee = $base_amount * ($interest / $duration);
//      //echo $per_month_interest_fee;
//     $total_per_month_pay = $base_amount + $per_month_interest_fee ;
//    //echo "PER MONTH PAYABLE"  . ceil($total_per_month_pay);
//    return ceil($total_per_month_pay);
//  }
//  //calLoan(10000, 12, 0.1);

// function isAbleToGetLoan($income, $expenses, $calLoan){
//     //$income = 25000;
//     //$expenses = 20000;
//     $saving = $income - $expenses;
//     if($saving > $calLoan){
//         echo " YES, YOU CAN.  $calLoan" ;
//     }else{
//         echo " NO, YOU CAN'T.  $calLoan" ;
//     }
// }

// isAbleToGetLoan(25000, 20000, calLoan(10000, 12, 0.1));

//TERNARY OPERTOR

// $num1 = 50;
// $num2 = 100;

// echo $num1 > $num2 ? "Num1 is a greater Num," : "Num2 is a greater Num";

// $num = 16;
//  echo $num % 2 == 0 ? 'Even Number' : 'Odd Number';


// $user_name = null;

// echo $user_name ?? "abc" ;

//SWITCH
// $guess_color = 'lightblue';
// switch($guess_color){
//         case 'red' :
//        echo "You have selected right color <br>";
//             break;
//         case 'green' :
//             echo "You have selected wrong color <br>";
//             break;
//         default : 
//         echo  "You have selected default color <br>";
// } 
