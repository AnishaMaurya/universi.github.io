<?php

if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";
$database = "university";

$con = new mysqli($server, $username, $password, $database);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

// echo "Success connecting to the db"; 

$name = $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$desc =  $_POST['desc'];


$sql ="INSERT INTO student ( `name`, `email`, `subject`, `message`, `dt`) VALUES ( '$name', '$email', '$subject', '$desc', current_timestamp());";
//  echo $sql;

if($con->query($sql)===true){
    echo "successfully inserted.......";

}
else{
    echo "not inserted";
}

$con->close();

}


?>
