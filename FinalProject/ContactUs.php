


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
	<!--menu side -->
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
	<form >
		<fieldset class="form3"> 
			<h3>For further information, please do not hesitate to contact</h3>
			<ul>
				<li style = "list-style-type: circle">Full Name: Johnny Aldeb</li>
				<li style = "list-style-type: circle">Student ID: 40187248</li>
				<li style = "list-style-type: circle">Email: Johny.Aldeb@gmail.com</li>
			</ul>
			
	

		</fieldset>

	</form>
	
<!-- Footer -->
<footer>
  <div class="footer2">
    <a onclick="myFunction()" style="cursor: pointer"> Privacy/Disclaimer Statement </a>
   
<p>I used Google Chrome to designe/test my website </p>
  </div>
  
</footer>
	    <script  src="web.js"> </script>
</body>