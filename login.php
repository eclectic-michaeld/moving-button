<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          <title>Unique CV Generator</title>
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
          <link rel="stylesheet" href="style.css">
          <script  type="text/javascript" src="js/movingButton.js" defer></script>
    </head>
<body style=" background:url(assets/css/img/hero-bg.png)  center no-repeat;">

    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="index.php"><b>Return home</b></a></div>
				<div class="contact">
					<form action="" name="form" method="post" id="login" novalidate>
						<h3><b>SIGN IN</b></h3>
						<!-- <input type="text" placeholder="USERNAME" name="name" onclick="resetBtn()"  >
						<input type="text" placeholder="PASSWORD" name="password" onclick="resetBtn()">
						<button class="submit" id="submit" onmouseover="onmouseOver()">Let's go In</button> -->

						<input type="email" placeholder="email" name="email" id="email"
							   value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" onclick="resetBtn()">


						<input type="password" placeholder="password" name="password" id="password" onclick="resetBtn()">
                        <button class="submit" id="submit" onmouseover="onmouseOver()">Let's go In</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2><b>CV Generator</b></h2>
					<h5 >A Simple Way and Easier to generate your CV</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>

</body>
</html>
