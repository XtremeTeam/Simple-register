
<?php
$connection = mysql_connect("localhost", "DATABASE_USERNAME", "DATABASE PASSWORD"); // Establishing connection with server..
$db = mysql_select_db("DATABASE_HERE", $connection); // Selecting Database.
$username=$_POST['username1']; // username you type in
$email=$_POST['email1'];
$password=$_POST['password1']; // Password Encryption, 
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM Users WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into users(username, email, password) values ('$username', '$email', '$password')"); // Insert query
if($query){
echo "Account Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>

