<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro to PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="response">
		<div class="container">
			<p>Dear <?php echo $_POST['firstName'] ?>.</p>
			<p>Thank you for your interest in DMACC.</p>
			<p>We have you listed as a <?php echo $_POST['academicStanding'] ?> starting this fall.</p>
			<p>You have declared <?php echo $_POST['selectedMajor'] ?></p>
			<?php
				if(isset($_POST['contact']) or isset($_POST['advisor'])){
					echo "<p>Based upon your responses we will provide the following information in our confirmation email to you at " . $_POST['email'] . ".</p>";
				};
				if(isset($_POST['contact'])){
					echo "<p>We will email you about the program info.</p>";
				};
				if(isset($_POST['advisor'])){
					echo "<p>We will have an advisor contact you.</p>";
				};
			?>
			<p>You have shared the following comments which we will review: </p>
			<p><?php echo $_POST['comments'] ?></p>
		</div>
	</div>

</body>
</html>
