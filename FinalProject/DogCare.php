

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
<!--form -->
	
	<h2 class="title">How To Take Care Of A Dog</h2>

		<div class="CatDogCare-left1">
			<h3 >Feeding a Dog </h3>
			<ol> 
				<li>Feed your dog a high quality dog food.</li>
				<li>Avoid giving your dog an excessive amount of treats or people food.</li>
				<li>Give your dog water. </li>
				<li>Feed your dog on a regular schedule.</li>
			</ol>
			

		</div>
		<div class="CatDogCare-left2">
			<h3 >Caring For the Health of a Dog</h3>
			<ol>
				<li>Make sure you have a good, reliable veterinarian.</li>
				<li>Get your dog vaccinated.</li>
				<li>Consider fitting the dog with an ID chip.</li>
				<li>Use regular parasite preventative treatments.</li>
			</ol>
		</div>
		<div class="CatDogCare-right1">
			<h3 >Grooming a Dog</h3>
			<ol>
				<li>Brush your dog.</li>
				<li>Keep your dog's coat clean.</li>
				<li>Keep your dog's nails trimmed. </li>
				<li>Provide your dog with plenty of exercise. </li>
			</ol>
		</div>
		<div class="CatDogCare-right2">
			<h3 >Treating Your Dog With Respect and Love  </h3>
			<ol>
				<li>Register your dog and put tags on its collar.</li>
				<li>Treat your dog with respect. </li>
				<li>Be aware that your dog has basic needs that need to be fulfilled. </li>
				<li>Build a bond of mutual love and respect with your dog.</li>
			</ol>
		</div>
		
	
	
<!--Footer-->
<footer>

  <div class="footer2">
  	<p>This information are taken from <a href="https://www.wikihow.pet/Take-Care-of-a-Dog">(click here)</a> </p>
    <a onclick="myFunction()" style="cursor: pointer"> Privacy/Disclaimer Statement </a>
   
<p>I used Google Chrome to designe/test my website </p>
  </div>
  
</footer>
	    <script  src="web.js"> </script>
</body>