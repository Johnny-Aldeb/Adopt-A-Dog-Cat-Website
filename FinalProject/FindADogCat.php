
<?php




if(isset($_POST["kindOfPet"]) && isset($_POST["Breed"]) && 
	isset($_POST["age"]) && isset($_POST["Gender"])
	 && isset($_POST["yesOrno"])){

$animal_type = $_POST["kindOfPet"];
$breed = $_POST["Breed"];
$age = $_POST["age"];
$gender = $_POST["Gender"];
$get_along = $_POST["yesOrno"];


	if($animal_type == "dog" && $breed == "dog" && $age == "1-6" && $gender == "male"  && $get_along== "yes"){
		echo "<script>location='Available1.html'</script>";
	
}elseif ($animal_type == "dog" && $breed == "dmc" && $age == "+6" && $gender == "male"  && $get_along== "no") {
	echo "<script>location='Available2.html'</script>";
	
}elseif($animal_type == "cat" && $breed == "cat" && $age == "+6" && $gender == "male"  && $get_along== "no"){
	echo "<script>location='Available3.html'</script>";
}elseif($animal_type == "cat" && $breed == "cat" && $age == "1-6" && $gender == "female"  && $get_along== "yes"){
	echo "<script>location='Available4.html'</script>";
}
else{
	echo '<script>alert("Sorry Your Prefered Pet Is Not Available Here Are Our Pets Available In Our Store")</script>';
	echo "<script>location='BrowseAvailablePets.html'</script>";
	
}



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



	<form action="" method="post" >
		<fieldset class="form1"> 
			<legend >Find a Dog/Cat</legend>
			<label >Preferred animal:</label>
			<input class="a" type="radio" name="kindOfPet" value="dog" >
		    <label>Dog</label>
		    <input class="a" type="radio" name="kindOfPet" value="cat" >
		    <label>Cat</label>
		    <br>
		    <br>
		    <label>Breed of:</label>
			<input class="b" type="radio" name="Breed" value="dog"  >
		    <label>Dog</label>
		    <input class="b" type="radio" name="Breed" value="cat" >
		    <label>Cat</label>
		    <input class="b" type="radio" name="Breed" value="dmc" >
		    <label>doesn???t matter choice</label>
		    <br>
		    <br>
		    <label>Age of animal</label>
		    <select name="age" >
			    
			<option class="c" value="1-6">
			     Between 1 and 6
			</option>

			<option class="c"  value="+6">

				More than 6
				
			</option>
			<option class="c"  value="dmc">
				doesn???t matter choice
			</option>
		</select>
<br>
<br>
        <label>Preferred gender:</label>
		<input class="d" type="radio" name="Gender" value="male">
		<label>male</label>
		<input class="d" type="radio" name="Gender" value="female" >
		<label>Female</label>
		<input class="d" type="radio" name="Gender" value="dmc" >
		<label>doesn???t matter choice</label>
		<br>
		<br>

		<label>Does it needs to get along with other dogs, other cats, small children?</label>
		<input class="e" type="radio" name="yesOrno" value="yes" >
		<label>Yes</label>
		<input class="e" type="radio" name="yesOrno" value="no">
		<label>No</label>
		<br>
		
		<!-- <button class="button" onclick="checkInf()">Submit</button> 
		<button class="button">Clear</button>
		-->
		<input type="submit" name="submit" class="button" value="submit" onclick="checkInf()">
		
		<input class="button" type="reset" name="clear" value="Clear">
		
		
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