<?php 
include_once "config.php";
if(!$_POST['searchTerm']){
    echo 123;
}else{
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    echo $searchTerm;
}

// $output = "";
// $sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTern}%'");

// if(mysqli_num_rows($sql) > 0) {

// }else{
//     $output .= "No user found related to your search tern";
// }
// echo $output;
?>
