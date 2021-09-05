
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!--check for submission -->
<?php
  if (isset($_POST['submit']))  {
    echo "forms is submitted"
  }
 ?>

<!doctype HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!--style CSS-->
<link rel="stylesheet" href="forms1.css">

<title>website project</title>
<!--Ion icon-->
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicos.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<!--icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!---Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>




<body data-spy="scroll" data-target="navbarResponsive">

<!-- Top Bar-->
<div class="top bar">
 <div class="container">
   <div class="col-12 text-right">
     <p><a href="tel:+0134761318">Call us at (06) HTML- CSS</a></p>
</div>
</div>
</div>

<!--Start Home section--->
<div id="home" class="offset">

<!-- Navigation-->
<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="one page.html"><img src="#"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
<span class="navbar-toggler-icon"></span>
</button>

 <div class="collapse navbar-collapse" id="navbarResponsive">
   <ul class="navbar-nav ml-auto">
       <li class="nav-item">
         <a class="nav-link"  href="#Home">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link"  href="#course">Services</a>
       </li>
       <li class="nav-item">
         <a class="nav-link"  href="#portfolio">porfolio</a>
       </li>
       <li class="nav-item">
         <a class="nav-link"  href="#team">Team</a>
       </li>
       <li class="nav-item">
         <a class="nav-link"  href="#contact">contact</a>
       </li>
       <li class="nav-item">
         <a class="nav-link"  href="#">query</a>
       </li>
   </ul>
   </div>

</nav>
</div>
</header>
  <body>









<?php
// define variables and set to empty values
$firstnameErr =  $lastnameErr =    $addressErr =     $postcodeErr   = $cityErr =  $stateErr =   $emailErr =  $contactnumberErr  = $websiteErr = $genderErr"";
$firstname =  $lastname =    $address =   $postcode  =  $city  =  $state =   $email = $contactnumber  = $website =   $gender"";

// define fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST")  {


  //firstname valid
 if (empty($_POST["firstname"])){
   $firstnameErr = "First name is required";
 }else{
   $firstname = input_data($_POST["first name"]);
   //check if name only contains letter and whitespace
   if (!preg_match("/^[a-zA-Z-']*$/", $firstname)){
    $firstnameErr ="Only letters and white space alllowed";
   }
 }

//lastname valid
 if (empty($_POST["lastname"])){
   $lastnameErr = "last name is required";
 }else{
   $lastname = input_data($_POST["last name"]);
   //check if name only contains letter and whitespace
   if (!preg_match("/^[a-zA-Z-']*$/", $lastname)){
    $lastnameErr ="Only letters and white space allowed";
   }
 }

if (empty($_POST["Address"])){
  $regex = "/[A-Za-z0-9\-\\,.]+$/";
  $addressErr = "Address is required";
  $valid_address = $address;
}else{
  $address = input_data($_POST["Address"]);
  //check address only contains alpahabe ,comma,hyhens and numerical character
  if(!preg_match($regex,$Address)){
    $emailErr = "Address is not valid";
}else{
    //check if contains $pattern
    echo"Your adddress is:".$address;
  }
}

// postcode validation
if(empty($_POST["Postcode"])){
  $s = "a-zA-Z-";
  $mincode = "5";
  $maxcode = "5";
  $postcode_length ="/^[0-9]{'.$mincode.','.$maxcode.'}\z/',$s^/";
  $postcode = "postcode is required";
}else{
  $postcode = input_data($_POST["Postcode"]);
  // check if postcode contains letter
  if(!preg_match($postcode_length,$postcode)){
  $postcodeErr = "postcode is invalid";
}else{
  //check if postcode contains $pattern
  echo " Your postcode is:".$postcode;
}
}



// city Validation
if(empty($_POST["city"])){
$cityErr = "city is required"
}else{
$city = input_data($_POST["city"]);
//check if city only contains letter and whitespace
if (!preg_match("/^[a-zA-Z-']*$/", $city)){
 $cityErr ="Only letters and white space alllowed";
}
}
// state validation
if(isset($_POST["submit"])){
if(!empty($_POST["state"])){
  $selected =$_POST["state"];
   echo 'You have chosen:'.$selected;
  }else{
    echo 'Please select state.';
//check if state only contains letter and whitespace
}
}




//email  is required
if (empty($POST["$email"])){
  $pattern = "^[a-z0-9]+(\.[a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
  $emailErr = "Email is required";
// email is not valid
}else{
  $email = input_data($POST["email address"]);
//check if email address is valid
if(!preg_match($pattern,$email){
$emailErr = "the email address is incorrect"

// email is valid
}else{
  //check if email contains pattern
echo"Your valid email address is:".$email;
  }
  }



//contact number  is required
if(empty($POST["contactnumber"])){
 $ContactnumberErr = "contact number is required";
 $s = "a-zA-Z-";
 $minDigits = "10";
 $maxDigits ="11";
 $telephone_length ="/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/',$s^/";
// number validation only
}else{
  if(preg_match($telephone_length,$Contactnumber));
  $emailErr = "contact number is valid, please enter number only without space,-,()"
}
}

//website validation
if(empty(["$ $website "])){
$websiteErr = "please enter website address";
}else{
  $website = input_data($_POST["website"])
  //check if website is valid
  if(!preg_match("/\b(?:(?https?|ftp):\/www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
   $websiteErr = "Enter a valid website URL";
  }
}

// end website validation

// comment  validation
 if(empty($_POST["comment"])){
 $comment="";

 }

// gender validation
if(!isset($_POST["gender"])){
  $genderErr = "You forget to select your gender!"

}

//end  define field
//function test input data
 function data_input($data){
  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

 }

// end function test input data
// end field  data
 }
}
?>
<div class="container">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<!--debug forms:method-->
<!-- consider need for adress 2-->
<!--div for Last_name:<input type="text" name="last name"  value="-->
<form method= "post" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="form-row">
<div class= "col-md-6 mb-3">
<label for ="First name">First name</label>
<input type="text"      value="<?php echo $firstname;?>">
<span class="error">* <?php echo $firstnameErr;?></span>
</div>
<br></br>
<div class= "col-md-6 mb-3">
<label for ="Last name">Last name</label>
<input type="text" name="last name"  value="<?php echo $lastname;?>">
<span class="error">* <?php echo $lastnameErr;?></span>
</div>
</div>
<br></br>
<!--address-->
<div class="form-row">
<div class="col-md-12 mb-3">
<label for ="address">Address</label>
<input type="text" name="address" value="<?php echo $address;?>">
<span class="error">*<?php echo $addressErr:?></span>
</div>
<br></br>
<!--postcode/city/state in  row in 3 separate column 12 grid-->
<div class="form-row">
<div class="form-group col-md-3 mb-3">
<label for ="postcode">postcode</label>
<input type="text"name="postcode" placeholder="68000" value="<?php echo $postcode;?>" tabindex="3">
<span class="error">*<?php echo $postcodeErr:?></span>
</div>
<br> </br>
<!--city-->
<div class= "form-group col-md-3 mb-3">
<label for ="city">city </label>
<input type="text" name="city"  value="<?php echo  $city;?>" tabindex="4">
<span class="error">*<?php echo $cityErr:?></span>
</div>
</div>
<br></br>
<!--state-->
<div class="form-group col-md-3 mb-3">
<label for ="state">state</label>
<select name="state">
<option value ="disable selected">Choose state</option>
<option value ="selangor"<?php if ($row[state] == 'selangor') echo 'selected= "$selected"';?>>selangor</option>
<option value ="kuala lumpur"<?php if ($row[state] == 'kuala lumpur') echo 'selected= $selected"';?>>kuala lumpur</option>                                                               >kuala lumpur</option>
<option value="negeri sembilan"<?php if ($row[state] == 'negeri sembilan') echo 'selected= $selected"';?>>negeri sembilan</option>
<option value="melaka"<?php if ($row[state] == 'melaka') echo 'selected= $selected "';?>>melaka</option>
<option value="johor"<?php if ($row[state] == 'johor') echo  'selected= $selected"';?>>johor</option>
<option value="pahang" <?php if ($row[state] == 'pahang') echo  'selected= $selected"';?>  >pahang</option>
<option value="terengganu" <?php if ($row[state] == 'terengganu') echo  'selected= $selected"';?> >terengganu</option>
<option value="kedah" <?php if ($row[state] == 'kedah') echo  'selected= $selected"';?> >kedah</option>
<option value="perlis" <?php if ($row[state] == 'perlis') echo  'selected= $selected"';?>>perlis</option>
<option value="sarawak" <?php if ($row[state] == 'sarawak') echo  'selected= $selected"';?> >sarawak</option>
<option value-"labuan" <?php if ($row[state] == 'labuan') echo  'selected= $selected"';?> >labuan</option>
</select>
</div>
</div>
<br><br>
<!-- email-->
<div class="form-row">
<div class="col-md-12 mb-3">
<label for ="inputEmail">Email</label>
<input type="email"  id="email" name="email"  class="form-control" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
</div>
</div>
<br><br>
<div class="col-md-12 mb-3">
<label for ="url address">website address</label>
<input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
</div>
<br><br>
<div class="col-md-12 mb-3">
<label for="comment">comment</label>
<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
</div>
<br><br>
<!-- gender-->
<div class="form-group row">
<label for ="gender  class=col-form-label col-sm-2 pt-0">Gender</label>
<div class="col-sm-10">
<div class="form-check">
<input class="form-check-input" type="radio" name="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female</input>
<label class=form-check-label: for="female">female</label>
<input class="form-check-input" type="radio" name="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male</input>
<label class="form-check-label" for="male">male<label>
<span class="error">* <?php echo $genderErr;?></span>
</div>
</div>
</div>
<br><br>
<button class="btn btn-primary"  input type="submit" name="submit" value="Submit">submit form</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lasttname;
echo "<br>";
echo $address;
echo "<br>";
echo $postcode;
echo "<br>";
echo $city;
echo "<br>";
echo $state
echo "<br";
echo $contactnumber;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>




<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 <!-- font awesone ---->




</body>


</html>
