<?php session_start(); ?>
<?php include "singIn.php";?> 



<?php


if(isset($_SESSION['user1'])){

 

echo "<script>location='fileforpet.php'</script>";

  
  

} 



if(isset($_POST['submit'])){
  $user = new LoginUser($_POST['username'], $_POST['password']);
}

?>





<!DOCTYPE html>

<!-- Assignment 3 - Question 4
	 Course: SOEN 287
	 Section: CC
	 Written by: Johnny Aldeb

	Project - Adopt a Dog/Cat
-->

<html lang="en">

<head>

	<meta charset="utf-8">
	<title> Pet Friendly </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/favicon.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

  <style type="text/css">

  .Signin{
    position: absolute;

  border-color: #66BFBF;
  top: 900px;
  padding: 10px 50px;
  
  font-family: 'Montserrat', sans-serif;
  background-color: #F9F9F9;
left: 650px;
width: 400px;
height: 390px;
 margin-top: 14px;
 border-radius: 30px;
 font-size: 15px;
}


    
    


  </style>

    



</head>

<body onload="settime()">
	<header>
    <div class="top-cont">
      <a href="HomePage.php"><img class="logo" src="img/Dog&Cat.png" alt="Dog AND Cat logo"></a>

      <div class="dateTime">
        <h3 id="date">date</h3>
        <h3 id="time">time</h3>

      </div>
      
      <h1>Pet Friendly </h1>
      <h2>Pets For Adoption</h2>
      <img class="photo" src="img/Dog&Cat2.jpeg" alt="Dog AND Cat photo">
    </div>

  </header>
	<!-- menu side -->
	 <aside class="menu-bar">
    <nav class="navigation">
      <ul>
      <li class="Main">Main List</li>  
      <li> <a href="HomePage.php"><i class="fa-solid fa-house"></i> Home page</a> </li>
      <li><a href="creataccount.php"><i class="fa-brands fa-chrome"></i> Create an account</a></li>
      <li><a href="FindADogCat.php"><i class="fa-solid fa-magnifying-glass"></i>  Find a dog/cat</a></li>
      <li><a href="DogCare.php"><i class="fa-solid fa-dog"></i> Dog Care</a></li>
      <li><a href="CatCare.php"><i class="fa-solid fa-cat"></i> Cat Care</a></li>
      <li><a href="HaveAPetToGiveAway.php"> <i class="fa-solid fa-paw"></i> Have a pet to give away</a></li>
      <li><a href="ContactUs.php"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
</ul>
    </nav>
  </aside>

<!-- form -->
	

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off"  >
    <fieldset class="Signin" >
      <h2>Login</h2>
    <label style="font-family: 'Merriweather', serif; font-size: 20px;">Username:</label>
    <input type="text"  name="username">
    <br>
    <br>
    <label style="font-family: 'Merriweather', serif; font-size: 20px;">Password:</label>
    <input type="text"  name="password" >
    <br>
    <br>
    <button type="submit" name="submit" class="button">Log in</button>

    <p class="error" style="color: red;"> <?php echo @$user->error ?></p>
    <p class="success" style="color: green;"> <?php  echo @$user->success ?></p>
    <p style="padding-top: 40px;">Don't have an account? <a href="creataccount.php" style="color: #66BFBF; ">Sign up</a></p>

    </fieldset>

  </form>
    
    

	


	
<!--Footer -->
<footer>
  <div class="footer2">
    <a onclick="myFunction()" style="cursor: pointer"> Privacy/Disclaimer Statement </a>
   
<p>I used Google Chrome to designe/test my website </p>
  </div>
  
</footer>
	    <script  src="web.js"> </script>
</body>