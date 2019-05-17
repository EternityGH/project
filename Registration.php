<!DOCTYPE html>
<?php
     #1. Database ìnormation
     $server = "localhost";
     $account = "root";
     $password = "";
     $database = "project";
     
     #2. Declare Connection String
     $conn = mysqli_connect($server, $account, $password, $database);
     
     #3. Test Connection
     if($conn == null){
         die("Error: Connection Fails");
     }else{
        // echo ("Congratulation!");
     }

    if( isset($_POST['submit']) ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        // $query = "SELECT * FROM tb";
        $sql = "INSERT INTO user(name, email, password, phone, address, gender, role, dob)
        VALUES ('$name', '$email', '$pass', '$phone', '$address', '$gender', 1, '$dob')";
         
        mysqli_query($conn, $sql);

    }

    

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400', rel='stylesheet', type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">

  
</head>
  
<body>
    <div class="container">
        <div id="logbox">
            <form id="signup" method="post" action="Registration.php">
                <h1 style="text-align: center;">Create an account</h1>
                <div class="row">
                    <div class="col-md-6">
                        <input class="input pass" name="name" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" />
                        <input class="input pass" name="email" type="email" placeholder="Email address (optional)" />
                        <input class="input pass" name="pass" type="password" placeholder="Choose a password" required="required" />
                        <input class="input pass" name="rpass" type="password" placeholder="Confirm password" required="required" />
                    </div>
                    <div class="col-md-6">
                        <input class="input pass" name="phone" type="number" placeholder="Your phone number" />
                        <input class="input pass" name="address" type="text" placeholder="Your address" />
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
                        <label class="custom-control-label" for="customRadio1">Male</label>
                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
                        <label class="custom-control-label" for="customRadio1">Female</label>
                      </div>
                        <input class="input pass" type="date" name="dob">
                    </div>
                </div>

                <input class="inputButton" name="submit" type="submit" value="Sign me up!" />
            </form>
        </div>
    </div>
</body>

</html>
<?php
$conn->close();
?>