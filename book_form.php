<?php
    $connection = mysqli_connect('localhost','root','','tourismo_db');

    $emailErr = "";
    $email = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
    }

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $destinations = $_POST['destinations'];
        $guests = $_POST['guests'];
        $arrivalAdd = $_POST['arrivalAdd'];
        $arrivalDate = $_POST['arrivalDate'];
        $departureDate = $_POST['departureDate'];
        
        $request = "insert into queryform(name, email, mobile, address, destinations, guests, arrivalAdd, arrivalDate,departureDate)
                    values('$name', '$email', '$mobile', '$address', '$destinations', '$guests', '$arrivalAdd', '$arrivalDate', '$departureDate');";
        
        mysqli_query($connection, $request);

        header('location:book.php');    
    }
    else{
        echo 'Something Went wrong.. Please try again!!';
    }
?>


