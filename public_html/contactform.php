<?
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$to='gowthamravi032@gmail.com';
$subject="mail from website";
$txt="Name= $name \r\n Email=$email \r\n Message=$message \r\n";
$header='From:' . $email;

if($email!=NULL){

    if(mail($to,$subject,$txt,$header)){
        printf("the mail send successfully");
    }
}
//  header("Location:index.php");

?>