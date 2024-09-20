<<?php
function checkCredentials($username,$password){
 $userrname="admin";
 $passsword="admin";
 if ($username===$userrname && $password===$passsword) {
    return true;
 }else {
    return false;
 }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(checkCredentials($username,$password)){
        header("Location: success.php");
    }else {
        header("Location: error.php");
    }
}
?>