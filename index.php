<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'lib/PHPMailer/src/Exception.php';
	require 'lib/PHPMailer/src/PHPMailer.php';
	require 'lib/PHPMailer/src/SMTP.php';

?>

<!doctype html>
<html>
	
<head>
	
	<title>Poodle</title>

	<meta charset="UTF-8">
	<meta name="description" content="Offering information on different poodle breeds and selection of food products."/>
	<meta name="keywords" content="Pets, Poodles, Poodle Food, Poodle Breeds"/>
	<meta name="author" content="Dalvinderpal Soora" />
	<meta name="robots" content="noindex"/>

	<meta property="og:title" content="Poodle" />
	<meta property="og:description" content="Offering information on different poodle breeds and selection of food products.">
	<meta property="og:url" content="http://poodle.dalvinderpalssoora.com" />
	<meta property="og:image" content="http://poodle.dalvinderpalssoora.com/assets/images/og-cover.png" />

	<meta name="twitter:title" content="Poodle">
	<meta name="twitter:description" content=" Offering information on different poodle breeds and selection of food products.">
	<meta name="twitter:image" content="http://poodle.dalvinderpalssoora.com/assets/images/og-cover.png">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="shortcut icon" type="image/svg" href="assets/images/favicon.svg"/>
	<link rel="stylesheet" href="https://use.typekit.net/qkg5rdv.css">
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/base.js"></script>
	
</head>

<body class="home">

	<header>
		<div class="container">
			<div class="logo">
				<a href="http://poodle.dalvinderpalssoora.com"><img src="assets/images/poodle-logo.png" alt="Poodle Logo"></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#products">Products</a></li>
					<li><a href="#types">Types</a></li>
					<li><a href="#delivery">Delivery</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<div class="mobile-menu">
					<button><img id="mobile-button" src="assets/images/bars-solid.svg" alt="Menu Icon"></button>
					<div id="mobile-menu" class="modal">
							<div class="modal-content">
									<span class="close">&times;</span>
									<img src="assets/images/poodle-logo.svg" alt="Poodle Logo">
									<ul class="mobile">
										<li><a href="#products">Products</a></li>
										<li><a href="#types">Types</a></li>
										<li><a href="#delivery">Delivery</a></li>
										<li><a href="#contact">Contact</a></li>
									</ul>
							</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="hero">
		<div class="container">
			<div class="image">
				<img src="assets/images/poodle-hero-image.png" alt="Poodle Hero Image">
			</div>
			<div class="information">
				<div class="content">
					<h1>Find out the different poodle breeds and products available to them!</h1>	
					<button id="signup-button-1" class="button">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<div id="products" class="products content">
		<div class="container">
			<div class="title">
				<h2>Products</h2>
			</div>
			<div class="carousel">
				<div class="slideshow-container">
					<div class="slideshow-slides fade" style="display: flex;">
						<div class="text">
							<h2>Royal Canin</h2>
							<p>ROYAL CANIN® Poodle Adult product is created with all the nutritional needs for the dog, the ingredients used will help the dog progress into a healthy loving animal. ROYAL CANIN® contains a healthy amount of omega-3 fatty acids so that your dog gets the recommeneded amount for a sustained healthy life. The nutrients have a specially created protient for healthy hair growth.</p>
							<a class="button width-120 slideshow-button" href="https://www.amazon.co.uk/Royal-Canin-Food-Poodle-1-5kg/dp/B001AW081S/ref=sr_1_5?keywords=royal%2Bcanin%2Bpoodle&amp;qid=1585326998&amp;s=pet-supplies&amp;sr=1-5&amp;th=1" target="_blank">Buy Now</a>	
						</div>	
					</div>
					<div class="slideshow-slides fade" style="display: none;">
						<div class="text">
							<h2>Purina Pro Plan</h2>
							<p>PURINA PRO PLAN Dog Medium Adult product for dogs is a specially crafted dry food to help medium sized dogs meet there nutritional needs for a sustained lifestyle. The product contains high quality chicken pieces made to a high standard and follow strict food standard guidelines so that consumers will be satisfied with there product for there loving dogs. The ingredients help deliver nutritional performance and help promote dogs health.</p>
							<a class="button width-120 slideshow-button" href="https://www.amazon.co.uk/Burgess-Food-British-Chicken-Adult/dp/B0030U7GBS?ref_=fsclp_pl_dp_2" target="_blank">Buy Now</a>
						</div>
					</div>
					<div class="slideshow-slides fade" style="display: none;">
						<div class="text">
							<h2>Burgess</h2>
							<p>Burgess Supadog Adult Rich product for dogs is made with delicious tasty moist chicken chunks with high grade vegetable chunks to palpitate the dogs taste. Burgess Supadog products are voted some of the best products for a dog. Your dog will feel naturally healthy and full of life giving it our products. Ingredients are rich in protein and help promote muscle development and increased endurance. Plus we have cooked the delicious treat in meat juice for extra tongue tasting delight!</p>
							<a class="button width-120 slideshow-button" href="https://www.amazon.co.uk/Plan-Adult-Food-Chicken-Medium/dp/B00Y9SSI1W?th=1" target="_blank">Buy Now</a>
						</div>
					</div>
					<div class="slideshow-slides fade" style="display: none;">
						<div class="text">
							<h2>Iams for Vitality</h2>
							<p>IAMS for Vitality is taylor made for small and medium sized adult dogs. Made with 100% fresh chicken with 85% aimal protein to help promote healthy growth for your dogs.No artificial colours or preservative. The product comes in achoices of amazing flavours to cater for your dogs particular taste. IAMS understands the nutrition your dogs need. Includes Omega 3 to support healthy skin.</p>
							<a class="button width-120 slideshow-button" href="https://www.amazon.co.uk/IAMS-Vitality-Adult-Medium-Chicken/dp/B00BTG9NPM" target="_blank">Buy Now</a>
						</div>
					</div>
					<div class="slideshow-slides fade" style="display: none;">	
						<div class="text">
							<h2>Pooch &amp; Mutt</h2>
							<p>Pooch &amp; Mutt products is a balanaced nutritional food for dogs with special needs. The product contains probiotic supplements to aid digestion for your dogs. Packed with ingredients high in fibre and vitamin B, your dog should not need to worry about completing daily activities with Pooch &amp; Mutt products.</p>
							<a class="button width-120 slideshow-button" href="https://www.amazon.co.uk/Pooch-Mutt-Complete-Digestion-Natural/dp/B009R029A8/ref=sr_1_7?keywords=poodle+food&amp;qid=1585328631&amp;s=pet-supplies&amp;sr=1-7" target="_blank">Buy Now</a>
						</div>
					</div>
					<a class="prev" onclick="plusSlides(-1)"><img src="assets/images/arrow-circle-left-solid.svg"></a>
					<a class="next" onclick="plusSlides(1)"><img src="assets/images/arrow-circle-right-solid.svg"></a>
				</div>
				<br>
				<div class="text-align-center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>	
				</div>
			</div>
		</div>
	</div>

	<div id="types" class="types content">
		<div class="container">
				<div class="title">
					<h2>Types</h2>
				</div>
				<div class="information standard">
					<div class="image">
						<img src="assets/images/standard-poodle.svg" alt="Standard Poodle Image">
					</div>
					<div class="text-section">
						<div class="text">
							<h3>Standard Poodles</h3>
							<p>Standard Poodles are the largest of their type and are known to be affectionate, lively and highly intelligent dogs. They are superb family pets and companions thanks to their loyal and kind natures.</p>
							<p>Rarely showing any aggressive behaviour, Standard Poodles are high-spirited dogs and love nothing more than to please which is just one of the reasons why they are so easy to train when correctly handled. <span><a style="color: #000000;" href="https://www.pets4homes.co.uk/dog-breeds/standard-poodle/" target="_blank">Reference</a></span></p>
						</div>
					</div>
				</div>
				<div class="information miniature">
					<div class="image">
						<img src="assets/images/miniature-poodle.svg" alt="Miniature Poodle Image">
					</div>
					<div class="text-section">
						<div class="text">
							<h3>Miniature Poodles</h3>
							<p>Miniature Poodles are larger than their Toy Poodle counterparts, but smaller than the Miniature Poodle. Over the years, they have remained a popular choice as both companions and family pets in the UK and elsewhere in the world thanks to their charming looks and kind, loyal natures.</p>
							<p>They don't shed which is another bonus of sharing a home with a Miniature Poodle, although their coats do need quite a lot of attention when it comes to keeping them looking good and in top condition which adds to the cost of owning one of these delightful little dogs. <span><a style="color: #000000;" href="https://www.pets4homes.co.uk/dog-breeds/miniature-poodle/" target="_blank">Reference</a></span></p>	
						</div>
					</div>
				</div>
				<div class="information toy">
					<div class="image">
						<img src="assets/images/toy-poodle.svg" alt="Toy Poodle Image">
					</div>
					<div class="text-section">
						<div class="text">
							<h3>Toy Poodles</h3>
							<p>The Toy Poodle is the smallest of all Poodle breeds and over the years these charming little dogs have proved to be among the most popular companions not only in the UK, but in many other countries of the world too.</p>
							<p>Like the Standard and the Miniature, Toy Poodles don't shed and this paired to the fact they are highly intelligent has seen these charming little dogs find their way into the hearts and homes of many people. They are also always well received in the show ring thanks to their desire to perform and please. <span><a style="color: #000000;" href="https://www.pets4homes.co.uk/dog-breeds/toy-poodle/" target="_blank">Reference</a></span></p>
						</div>
					</div>
				</div>
		</div>
	</div>

	<div id="delivery" class="delivery content">
		<div class="container">
			<div class="information">
				<div class="text">
					<img src="assets/images/paw-solid.png" alt="Poodle Paw Icon">
					<h2>Spend £30 for Free Delivery!</h2>
					<p>When purchasing products please not orders over £30 qualifies for free delivery and use the code below to get an extra £5 off.</p>
					<span>FiveOff</span>
				</div>
			</div>
		</div>
	</div>

	<div id="contact" class="contact content">
		<div class="container">
			<div class="title">
				<h2>Contact</h2>	
			</div>
			<div class="sub-container">
				<div class="information">
					<div class="text">
						<h2>For any queries relating to products or more information about poodles then please use the contact form to get in touch and we will endevour to response to you as soon as possible.</h2>
					</div>
					<div class="form">
						<?php

							if ( isset( $_POST['contact'] ) ) {

								$email   = isset( $_POST['email'] ) ? $_POST['email'] : false;
								$name    = isset( $_POST['name'] ) ? $_POST['name'] : false;
								$comment = isset( $_POST['message'] ) ? $_POST['message'] : false;

								$subject = 'Contact Form Submission';
								$message = 'Name: ' . $name . ', Email: ' . $email . ', Message: ' . $comment;

								if( ! empty( $name ) && ! empty( $email ) && ! empty( $comment ) ) {

									$mail = new PHPMailer(true);

									//Server settings
									$mail->isSMTP();                                              // Send using SMTP
									$mail->Host       = 'smtp.hostinger.co.uk';                   // Set the SMTP server to send through
									$mail->SMTPAuth   = true;                                     // Enable SMTP authentication
									$mail->Username   = 'info@poodle.dalvinderpalssoora.co.uk';   // SMTP username
									$mail->Password   = '!GZgpW9C*gH5';                           // SMTP password
									$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
									$mail->Port       = 587;

									$mail->setFrom( 'info@poodle.dalvinderpalssoora.co.uk', 'Poodle Admin' );
									$mail->addAddress( 'info@poodle.dalvinderpalssoora.co.uk' );
									$mail->AddReplyTo( $email, $name );

									$mail->isHTML(true);
									$mail->Subject = $subject;
									$mail->Body    = $message;
									$mail->AltBody = $message;

									$mail->Send();

									echo "<meta http-equiv='refresh' content='0'>";
								}
							}
						?>
						<form method="POST">
							<input type="text" id="name" name="name" placeholder="Enter Full Name:"><br>
							<input type="email" id="email" name="email" placeholder="Enter Email Address:"><br>
							<textarea name="message" placeholder="Enter Message:"></textarea><br><br>
							<input class="button" type="submit" name="contact">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="main-container">
				<div class="logo">
					<img src="assets/images/poodle-logo.png" alt="Poodle Logo">
				</div>
				<div class="information">
					<div class="menu">
						<ul class="main">
							<li><a href="#products">Products</a></li>
							<li><a href="#types">Types</a></li>
							<li><a href="#delivery">Delivery</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="http://poodle.dalvinderpalssoora.com/privacy.php">Privacy</a></li>
						</ul>
					</div>
					<div class="additional-info">
						<div class="sign-up">
							<button id="signup-button-2">Clear here to sign up</button>
						</div>
						<div class="social">
							<a href="https://en-gb.facebook.com" target="_blank"><img src="assets/images/facebook-f-brands.svg" alt="Facebook Logo"></a>
							<a href="https://www.instagram.com" target="_blank"><img src="assets/images/instagram-brands.svg" alt="Instagram Logo"></a>
							<a href="https://twitter.com" target="_blank"><img src="assets/images/twitter-brands.svg" alt="Twitter Logo"></a>
							<a href="https://www.youtube.com/" target="_blank"><img src="assets/images/youtube-brands.svg" alt="Youtube Logo"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-container">
				<div class="copyright">
					<div class="payment">
						<img src="assets/images/cc-visa-brands.svg" alt="Payment Visa">
						<img src="assets/images/cc-mastercard-brands.svg" alt="Payment Mastercard">
						<img src="assets/images/cc-paypal-brands.svg" alt="Payment Paypal">
						<img src="assets/images/cc-apple-pay-brands.svg" alt="Payment Apple">
						<img src="assets/images/cc-amazon-pay-brands.svg" alt="Payment Amazon">
						<img src="assets/images/cc-amex-brands.svg" alt="Payment Amex">
						<img src="assets/images/cc-stripe-brands.svg" alt="Payment Stripe">
					</div>
					<div class="info">
							<p>Poodle Ltd &copy <?php echo date('Y') ?>. Built and Designed by <a style="color: #d3d3d3;" href="https://portfolio.dalvinderpalssoora.com" target="_blank">Dalvinderpal Soora</a></p> 
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div id="signup-modal" class="modal">
		<div class="modal-content">
			<div class="form">

				<?php

					if(isset($_POST['newsletter_form'])) {

						$newsletter_email = isset($_POST['newsletter_email']) ? $_POST['newsletter_email'] : false;
						$newsletter_name = isset($_POST['newsletter_name']) ? $_POST['newsletter_name'] : false;

						$newsletter_subject = "Newsletter Submission";
						$newsletter_message = "Thank you for signing up to our weekly newsletter where we will be sending updates and information on products for poodles, your details: Name: " . $newsletter_name . ", Email: " . $newsletter_email;

						if ( ! empty( $newsletter_name ) && ! empty( $newsletter_email ) ) {

							$newsletter_mail = new PHPMailer( true );

							//Server settings
							$newsletter_mail->isSMTP();                                               // Send using SMTP
							$newsletter_mail->Host       = 'smtp.hostinger.co.uk';                    // Set the SMTP server to send through
							$newsletter_mail->SMTPAuth   = true;                                      // Enable SMTP authentication
							$newsletter_mail->Username   = 'info@poodle.dalvinderpalssoora.co.uk';    // SMTP username
							$newsletter_mail->Password   = '!GZgpW9C*gH5';                            // SMTP password
							$newsletter_mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
							$newsletter_mail->Port       = 587;

							$newsletter_mail->setFrom( 'info@poodle.dalvinderpalssoora.co.uk', 'Poodle Admin' );
							$newsletter_mail->addAddress( $newsletter_email );

							$newsletter_mail->isHTML( true );
							$newsletter_mail->Subject = $newsletter_subject;
							$newsletter_mail->Body    = $newsletter_message;
							$newsletter_mail->AltBody = $newsletter_message;

							$newsletter_mail->Send();

							echo "<meta http-equiv='refresh' content='0'>";
						}
					}
				?>
				<span class="modal-close">&times;</span>
				<h2>Newsletter Sign Up</h2>
				<form method="POST">
					<input type="text" id="name" name="newsletter_name" placeholder="Enter Name:"><br>
					<input type="email" id="email" name="newsletter_email" placeholder="Enter Email Address:">
					<input class="button" type="submit" name="newsletter_form" value="Sign Up">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
