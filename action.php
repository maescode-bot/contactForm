<?php
 if (isset($_POST['submit']) and $_SERVER["REQUEST_METHOD"]=="POST") {
 	 $first_name=$_POST['first_name'];
 	 $last_name=$_POST['last_name'];
 	 $email=$_POST['email'];
 	 $department=$_POST['department'];
 	 $gender=$_POST['gender'];
 	 $message=$_POST['message'];
 	 $terms=$_POST['terms'];

 	 $fileName=$first_name.".txt";
 	 $fileName=fopen($fileName, "w") or die('unable to create file');

 	 $first_name ="First Name : ". $first_name."\n";
 	 fwrite($fileName, $first_name);

 	 $last_name ="Last Name : ". $last_name."\n";
 	 fwrite($fileName, $last_name);

 	 $email ="Email Address : ". $email."\n";
 	 fwrite($fileName, $email);

 	 $department ="Department : ". $department."\n";
 	 fwrite($fileName, $department);

 	 $gender ="Gender : ". $gender."\n";
 	 fwrite($fileName, $gender);

 	 $message ="Message : ". $message."\n";
 	 fwrite($fileName, $message);

 	 $terms ="Terms and Condition : ".$terms."\n";
 	 fwrite($fileName, $terms);

 	 if(fclose($fileName)){
 	 	echo "Thank you for contacting us, we will get back to you as soon as possible";
 	 };
 }
?>