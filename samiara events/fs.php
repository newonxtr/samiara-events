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
    $name2 =$_POST['name2'];
    $mob2 =$_POST['mob2'];
    $name3 =$_POST['name3'];
    $mob3 =$_POST['mob3'];
    $name4 =$_POST['name4'];
    $mob4 =$_POST['mob4'];
    $name5 =$_POST['name5'];
    $mob5 =$_POST['mob5'];
    $name6 =$_POST['name6'];
    $mob6 =$_POST['mob6'];
    $name7 =$_POST['name7'];
    $mob7 =$_POST['mob7'];
    $name8 =$_POST['name8'];
    $mob8 =$_POST['mob8'];
    $name9 =$_POST['name9'];
    $mob9 =$_POST['mob9'];
    $name10 =$_POST['name10'];
    $mob10 =$_POST['mob10'];
    $name11 =$_POST['name11'];
    $mob11 =$_POST['mob11'];
    $name12 =$_POST['name12'];
    $mob12 =$_POST['mob12'];
    $gender =$_POST['gender'];


    $sql ="INSERT INTO fashion(name,email,contact,dob,address,group_name,state,pin,teaml,mobl,name1,mob1,name2,mob2,name3,mob3,name4,mob4,name5,mob5,name6,mob6,name7,mob7,name8,mob8,name9,mob9,name10,mob10,name11,mob11,name12,mob12,gender)VALUES('$name','$email','$contact','$dob','$address','$group_name','$state','$pin','$teaml','$mobl','$name1','$mob1','$name2','$mob2','$name3','$mob3','$name4','$mob4','$name5','$mob5','$name6','$mob6','$name7','$mob7','$name8','$mob8','$name9','$mob9','$name10','$mob10','$name11','$mob11','$name12','$mob12','$gender')";
    if(!mysqli_query($con,$sql))
    {
        die('Error:' . mysqli_error($con));
    }
    else
        $to = $myemail;
        $email_subject = "Fashion show form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email\n contact: $contact \n";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);
    header('Location: getback.html');
        mysqli_close($con)
?>