<?php




?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>-->
    <script src="js/validation.js" defer></script>
    <script  type="text/javascript" src="js/movingButton.js" defer></script>
</head>
<body>
   <section class="signup">
	    <div class="signup_box">
		    <div class="left">
			  <!-- <div class="top_link"><a href="login.php"><b>Login here</b></a></div> -->

                <div class="contact">
                    <form action="process-signup.php"  method="post" id="signup" name="form" novalidate>
                        <h3><b>Fill Below</b></h3>

                        <input type="text" id="name" name="textarea" placeholder="date: eg july 21,2021 - oct 30, 2021" onclick="resetBtn()">
                        <input type="text" id="date" name="date" placeholder="company and work: eg intenship at GNASP tech" onclick="resetBtn()">
                        <input type="text" id="name" name="name" placeholder="Department: eg IT-facilities" onclick="resetBtn()">
                        <input type="text" id="name" name="name" placeholder="Duties: eg develop website,fixing printer machine" onclick="resetBtn()">
                        <button class="submit" id="submit" onmouseover="onmouseOver()">Next</button>
                    </form>
                </div>
			</div>
			<div class="right">
                <div class="right-text">
                  <h2><b>WORKING</b></h2><br>
                  <h2><b>EXPERIENCE</b></h2>
                  <h5 ></h5>
                </div>
                <div class="right-inductor"><img src="" alt=""></div>
            </div>

	   </div>
	</section>

</body>
</html>
