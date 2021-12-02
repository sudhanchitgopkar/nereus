<!DOCTYPE html>
<html >
<head>
<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" href="mycss.css">
</head>
<style>  
</style>
<body>
    
<span  class="N-logo">N.</span>

<br>
<div class="header">
    <h1>Create Your Profile</h1>
    <p>Tell us a bit about yourself!</p>
    
</div>
<div class="right">
    <img src="create_profile.svg" alt="alt text"/>
  </div>
<div class="circle"></div>

<div class="container1">

<form action="insertProfile.php" method ="post" id="add_profile_form">
        <label for="fname">Full Name:</label>
        <br>
        <input type="text" id="fname" name="fullname" style="height: 80px; margin: 0px 0px 10px 0px; width: 350px;" >
        <br>
<label for="biography">Biography:</label>
<br>
<input type="text" id="bio" name="bio" style="height: 407px; margin: 0px 0px 10px 0px; width: 905px;" >

</div>

<div class="container2">    
    <label for="age">Age:</label>  
    <input type="text" id="age" name="age" style="height: 80px; margin: 60px 74px 10px 15px; width: 450px;">
    <label for="job">Job Title:</label>
    <input type="text" id="job" name="job"style="height: 80px; margin: 60px 74px 10px 15px; width: 850px;">
</div>
    <!-- <div class="row">
        <label for="socialmedia">Social Media</label>
        <textarea id="socialmedia" name="socialmedia" style="width:460px"></textarea>

        </div> -->

    <div class="container3">

    <div class="leftcheckbox" style="float:left">
    <label for="identity">I identify as:</label>
    <br>
    <input type="checkbox" id="gender1" name="gender1" value="Male">
    <label for="gender1"> Male</label><br>
    <input type="checkbox" id="gender2" name="gender2" value="Female">
    <label for="gender2"> Female</label><br>
    <input type="checkbox" id="gender3" name="gender3" value="Non-Binary">
    <label for="gender3"> Non-Binary</label><br>
    <input type="checkbox" id="gender4" name="gender4" value="Other">
    <label for="gender4"> Other</label><br>
    </div>
   
    <div class="middlecheckbox" style="float:center">
    <label for="Looking for">Looking for:</label>
    <br>
    <input type="checkbox" id="gender1" name="gender1" value="Male">
    <label for="gender1"> Male</label><br>
    <input type="checkbox" id="gender2" name="gender2" value="Female">
    <label for="gender2"> Female</label><br>
    <input type="checkbox" id="gender3" name="gender3" value="Non-Binary">
    <label for="gender3"> Everyone</label><br>
    <input type="checkbox" id="gender4" name="gender4" value="Other">
    <label for="gender4"> Other</label><br>
    </div>

    <div class="rightcheckbox" style="float:right">
    <label for="distance">Relationship Type:</label>
    <br>
    <input type="checkbox" id="friends" name="friends" value="friends">
    <label for="friends"> Friends</label><br>
    <input type="checkbox" id="serious" name="serious" value="serious">
    <label for="serious"> Serious</label><br>
    <input type="checkbox" id="hookups" name="hookups" value="hookups">
    <label for="distance3"> Hookups</label><br>   
    <input type="checkbox" id="other" name="other" value="Other">
    <label for="gender4"> Other</label><br>      
    </div>

</div>

<div class="container4">
<label for="questions">Would you rather...</label>
<br>
<div class="q1">
    <button type="submit" form="form1" value="be eaten by a lion" style="width: 600px; margin: 50px 100px 50px 100px; width: 350px;">be eaten by a lion </button>
    <button type="submit" form="form1" value="be eaten by ants" style="width: 300px; margin: 50px 100px 50px 100px; width: 350px;">be eaten by ants</button>    
</div>

<div class="q2">
    <button type="submit" form="form1" value="know when the world ends" style="margin: 50px 100px 50px 100px; width: 350px;">know when the world end</button>
    <button type="submit" form="form1" value="know how the world ends" style="margin: 50px 100px 50px 100px; width: 350px;">know how the world ends</button>
</div>

<div class="q3">
<button type="submit" form="form1" value="poop yourself" style="margin: 50px 100px 50px 100px; width: 350px;">poop yourself</button>
<button type="submit" form="form1" value="pee yourself" style="margin: 50px 100px 50px 100px; width: 350px;">pee yourself</button>
</div>
</div>

<div class="container5">    
    <label for="insta">Instagram</label>  
    <br>
    <input type="text" id="insta" name="insta" style="height: 80px; margin: 60px 74px 10px 15px; width: 350px;">
    <label for="spotify">Spotify</label>
    <input type="text" id="spotify" name="spotify"style="height: 80px; margin: 60px 74px 10px 15px; width: 350px;">
    <label for="facebook">Facebook</label>
    <input type="text" id="facebook" name="facebook"style="height: 80px; margin: 60px 74px 10px 15px; width: 350px;">
</div>

<div class="button2">
    <!-- <label for="submit">Submit</label> -->
    <!-- <input type="submit" value="Submit"> -->
    <button type="submit" formaction="form1" value="Submit">Submit</button>

</div>

</form>
</div>




</body>
</html>
