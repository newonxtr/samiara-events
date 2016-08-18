<?php
    $conn_error = "Could not connect to database";

    $servername = 'localhost';
    $username="tabrez";
    $password="tabrez@123";
    $mysql_db = "Talent16";
    $myemail="newon.gonsalves@gmail.com";
    $con = mysqli_connect($servername,$username,$password) or die('Error');
    mysqli_select_db($con,$mysql_db) or die($conn_error);

    $name = $_POST['name'];
    $email =$_POST['email'];
    $contact =$_POST['contact'];
    $dob =$_POST['dob'];
	$address =$_POST['address'];
	$group_name =$_POST['group_name'];
	$state =$_POST['state'];
	$pin =$_POST['pin'];
	$teaml =$_POST['teaml'];
	$mobl =$_POST['mobl'];
	$name1 =$_POST['name1'];
	$mob1 =$_POST['mob1'];

    $sql ="INSERT INTO duet(name,email,contact,dob,address,group_name,state,pin,teaml,mobl,name1,mob1)VALUES('$name','$email','$contact','$dob','$address','$group_name','$state','$pin','$teaml','$mobl','$name1','$mob1')";
    if(!mysqli_query($con,$sql))
    {
        die('Error:' . mysqli_error($con));
    }
    else
        $to = $myemail;
        $email_subject = "Duet Dance form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email\n contact: $contact \n";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);
    header('Location: getback.html');
        mysqli_close($con)
?>