
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
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body onload="settime()">
  

  <header>
    <div class="top-cont">
      <a href="#skills"><img class="logo" src="img/Dog&Cat.png" alt="Dog AND Cat logo"></a>

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
      <li> <a href="#skills"><i class="fa-solid fa-house"></i> Home page</a> </li>
      <li><a href="creataccount.php"><i class="fa-brands fa-chrome"></i> Create an account</a></li>
      <li><a href="FindADogCat.php"><i class="fa-solid fa-magnifying-glass"></i>  Find a dog/cat</a></li>
      <li><a href="DogCare.php"><i class="fa-solid fa-dog"></i> Dog Care</a></li>
      <li><a href="CatCare.php"><i class="fa-solid fa-cat"></i> Cat Care</a></li>
      <li><a href="HaveAPetToGiveAway.php"> <i class="fa-solid fa-paw"></i> Have a pet to give away</a></li>
      <li><a href="ContactUs.php"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
</ul>
    </nav>
  </aside>

<!--content area -->

  <div class="skills" id="skills">
    <h2>welcome!</h2>
        
        <div class="content1">
          <img class="top" src="img/photo1.png" alt="Dog AND Cat photo">
          <h3 >About Us</h3>
          <p >Pet Friendly is an online, searchable database of animals who need homes. It is also a directory of nearly 11,000 animal shelters and adoption organizations across the U.S., Canada and Mexico. Organizations maintain their own home pages and available-pet databases.</p>
        </div>
        <div >
          <img class="bottom" src="img/photo2.png" alt="Dog AND Cat photo">
          <h3 >Our Mission</h3>
          <p>At Pet Friendly, we are dedicated to helping asmany homeless dogs as we can, whether they are from a pound,
             puppy mill or a home surrender. Our goal is tô carefully place each
             and every dog in the loving forever homes they so deserve
          </p>
        </div>
    </div>

<!-- Footer -->
<footer>
  <div class="footer">
    <p>This information are taken from <a href="https://www.kikodogrescue.ca/">(click here)</a> </p>
    <p>Photos are taken from <a href="https://www.flaticon.com/search?word=cat%20and%20dog">(click here)</a> </p>
    <a onclick="myFunction()" style="cursor: pointer"> Privacy/Disclaimer Statement </a>
    
<p>I used Google Chrome to designe/test my website </p>

  </div>
  
</footer>
<script src="web.js"> </script>
</body>
