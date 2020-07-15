<?php

$conn = mysqli_connect('localhost', 'root','','findee');
$message = '';


if (isset ($_POST['submit'])){
    // $name = $_POST['name'];
    // $name = mysqli_real_escape_string($conn, $name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn,$email);


    $query = "INSERT INTO findeetab (email) VALUES ('$email')";

    $result = mysql_query($conn, $query);
    if($result){
        echo "<script>
        alert('successfully subscribed')
        </script>";
    }

    else{
        echo "<script>
        alert('unsuccessful')
        </script>";
    }
}