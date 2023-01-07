<?php session_start(); ?>
<?php include 'singIn.php'; ?>
<?php include 'ownerFile.php'; ?>



<?php




 

if(!isset($_SESSION['user1'])){




	
	echo "<script>location='HaveAPetToGiveAway.php'</script>";
	
	
	

} 

if (isset($_GET['logout'])) {
	unset($_SESSION['user1']);

	

	echo "<script>location='HaveAPetToGiveAway.php'</script>";
	
	
}

?>

<?php 


if(isset($_POST['kind_of_pet']) && isset($_POST['Breed']) && isset($_POST['age']) && isset($_POST['Gender']) && 
	isset($_POST['yesOrno']) && isset($_POST['noOryes']) && isset($_POST['noryes']) 
		&& isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && 
		isset($_POST['submit'])){

  $user = new FileOwner($_POST['kind_of_pet'], $_POST['Breed'], $_POST['age'], $_POST['Gender'], $_POST['yesOrno'],
  	 $_POST['noOryes'], $_POST['noryes'], $_POST['firstName'], $_POST['lastName'], $_POST['email']);
    
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
   	.logout{
   		position: absolute;
   		border: solid 2px;
   		padding: 5px 5px;
  background-color:#F9F9F9 ;
  border-color: #66BFBF;
  
  font-family: 'Montserrat', sans-serif;
  border-radius: 100px;
  font-size: 25px;
  left: 1200px;
  top: 840px;


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

<div>
	<h2 style="margin-left: 400px;">Welcome <?php echo $_SESSION['user1'] ?></h2>
	<a href="?logout" class="logout"> Log out</a>
</div>
	<form action="" method="POST"  >
		<fieldset class="form2" > 
			<legend >Have A Pet To Give Away</legend>
			<label >Your pet:</label>
			<input class="f"  type="radio" name="kind_of_pet"  value="dog"  >
		    <label  >Dog</label>
		    <input class="f"  type="radio" name="kind_of_pet" value="cat"  >
		    <label  >Cat</label>
		    <br>
		    <br>
		    <label >Breed of:</label>
			<input class="g" type="radio" name="Breed"  value="dog" >
		    <label >Dog</label>
		    <input class="g" type="radio" name="Breed" value="cat" >
		    <label >Cat</label>
		    <input class="g" type="radio" name="Breed" value="mix_breed" >
		    <label >mix breed</label>
		    <br>
		    <br>
		    <label >Age of animal</label>
		    <select name="age">
			    <option value="1-6_years">
				Between 1 and 6
				
			</option>
			<option value="+6_years">
			     More than 6
			</option>

			<option value="doesn’t_matter_choice">

				doesn’t matter choice
				
			</option>
			
		</select>
<br>
<br>
        <label >Animal gender:</label>
		<input class="h" type="radio" name="Gender" value="Male">
		<label >male</label>
		<input class="h" type="radio" name="Gender" value="Female"  >
		<label>Female</label>
		
		<br>
		<br>

		<label >Get along with other dogs:</label>
		<input class="i" type="radio" name="yesOrno" value="YES" >
		<label >Yes</label>
		<input class="i" type="radio" name="yesOrno" value="NO">
		<label >No</label>
		<br>
		<br>
		<label >Get along with other cats:</label>
		<input class="j"  type="radio" name="noOryes"  value="YES" >
		<label >Yes</label>
		<input class="j"  type="radio" name="noOryes" value="NO">
		<label >No</label>
		<br>
		<br>

		<label >Suitable for a family with small children:</label>
		<input class="k"  type="radio" name="noryes" value="YES"  >
		<label >Yes</label>
		<input class="k" type="radio" name="noryes" value="NO">
		<label >No</label>
		<br>
		<br>

		<textarea  class="l" name="Comment area" rows="5" cols="22" placeholder="More information about the animal being put up for adoption">
		</textarea>
			<br>
		<br>
		<label >Owner’s First Name</label>
		<input class="m" type="text" name="firstName" >
		<br>
		<br>
		<label >Owner’s Family Name</label>
		<input class="m"  type="text" name="lastName" >
		<br>
		<br>
		<label >Owner’s Email </label>
		<input class="m"  type="email" name="email" >
		<br>
		<br>

		<button type="submit" name="submit" onclick="checkInf2()" class="button">submit</button>
		
		 <!-- <input type="submit" class="button" value="submit" onclick="checkInf2()" >  -->
		<input class="button" type="reset" name="clear" value="Clear">
	

	</fieldset>

	</form>

	


	
<!--Footer -->
<footer>
  <div class="footer2" style="position: absolute; top: 1600px;">
    <a onclick="myFunction()" style="cursor: pointer"> Privacy/Disclaimer Statement </a>
   
<p>I used Google Chrome to designe/test my website </p>
  </div>
  
</footer>
	    <script  src="web.js"> </script>
</body>