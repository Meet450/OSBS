
<?php 
if(isset($_POST['submit'])){        
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'osbs';
    $conn = mysqli_connect($localhost,$username,$password);
    if(!$conn){
    //echo "check your connection";
    }
    else{
      $db = mysqli_select_db($conn,$database);
      if (!$db) {
      //echo "check your database connection";
      }
      else{
    //   echo "database connection";
      }
      $name = strval($_POST['name']);
      $email = strval($_POST['email']);
      $dob = strval($_POST['dob']);
      $phone = intval($_POST['number']);
      $address = strval($_POST['address']);
      $gender = strval($_POST['gender']);
      $pincode = strval($_POST['pincode']);   
      $pass = strval($_POST['password']);

      //echo $name.'<br>'.$email.'<br>'.$dob.'<br>'.$phone.'<br>'.$address.'<br>'.$pincode.'<br>'.$pass.'<br>';
      
      $register = "INSERT into customer ('u_name','u_email,'u_phone','u_address','u_pincode','u_dob','u_gender','u_password') values ('$name','$email','$phone','$address','$pincode','$dob','$gender','$pass');"; 
      $r= mysqli_query($conn, $register);
      if($r){
        echo "<br>register successfilly<br>"; 
            
      }
      else{
        //echo "<br>register not successfully<br> ";
      }
    mysqli_close($conn);
    }
}
?>
