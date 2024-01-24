<?php
    include 'include/header.php';
	# CLEAN-STR
	function cleanStr($cStr)
	{
		$cStr = trim($cStr);
		$cStr = htmlspecialchars($cStr);
		$cStr = addslashes($cStr);
		return $cStr;
	}
?>

<!-- TOP-BAR -->
<div class="top-bar text-center mt-3 mr-3 d-md-none">
	<div class="control-side-menu mt-1 pl-4 pr-2 top-aera">
		<div class="border-0 p-0 sidebarBtn">
			<span class="bar-1"></span>
			<span class="bar-2"></span>
			<span class="bar-3"></span>
		</div>
	</div>
</div>

<div class="panel-body">
	
	<!-- HOME-DIV -->
	<div class="innerBody innerHome" target="home">
		<?php include 'include/pages/homePage.php'; ?>
	</div>
	
	<!-- ABOUT-DIV -->
	<div class="innerBody" target="about">
		<?php include 'include/pages/aboutPage.php'; ?>
	</div>
	
	<!-- RESUME-DIV -->
	<div class="innerBody" target="resume">
		<?php include 'include/pages/resumePage.php'; ?>
	</div>
	
	<!-- PORTFOLIO-DIV -->
	<div class="innerBody" target="portfolio">
		<?php include 'include/pages/portfolioPage.php'; ?>
	</div>

	<!-- CONTACT-DIV -->
	<div class="innerBody" target="contact">
	<script src="https://www.google.com/recaptcha/api.js?render=6LetfHsbAAAAAB_FGesc7bovkzPWG2MbjwKDP4mk"></script>
	<?php
		error_reporting(0); //FOR LocalHostServer

		if(isset($_POST) && isset($_POST["submit"]))
		{
			$secretKey 	= '6LetfHsbAAAAAHtg98A94EQbtZM65rgD7RUjT2LR';
			$token 		= $_POST["g-token"];
			$ip			= $_SERVER['REMOTE_ADDR'];

			$name	= cleanStr($_POST['name']);
			$email	= cleanStr($_POST['email']);
			$desc	= cleanStr($_POST['desc']);
			$desc	= nl2br($desc);
		
			$subject = "Saleem.pk : Message from $name";
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .="Reply-To: $email" . "\r\n";
			$headers .='From: info@saleem.pk' . "\r\n";

			$message = '
					Name: '.$name.'<br>
					Email: '.$email.'<br>
					Description: <br>'.$desc.'
			';
			
			$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
			
			$request = file_get_contents($url);
			$response = json_decode($request);
			if($response->success)
			{
				if(mail("info@saleem.pk", $subject, "$message",$headers))
				{
					$message = '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Your message has been sent. Thank you.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}
				else
				{
					$message = '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Something Went Wrong..!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					';
				}
			}
			else
			{
				$message = '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Captcha Validation Failed..!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				';
			}
		}
	?>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('6LetfHsbAAAAAB_FGesc7bovkzPWG2MbjwKDP4mk', {action: 'homepage'}).then(function(token) {
				// console.log(token);
			document.getElementById("g-token").value = token;
			});
		});
	</script>

	<?php include 'include/pages/contactPage.php'; ?>

	</div>
	
</div>














<?php
    include 'include/footer.php';
?>