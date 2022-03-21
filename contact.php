<?php
	// pathinfo give info about given file and returns it into an associative array:
$info = pathinfo( __FILE__ );

// the filename key holds file name without extension nor parent path:
$title = ucwords( $info['filename'] );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="./contact.css">
	<link rel="stylesheet" href="responsive.css">
	<link href="assets/fontawesome/all.min.css" rel="stylesheet">

	<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
	<!-- <script>var __adobewebfontsappname__="dreamweaver"</script> -->
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/main.js" defer></script>
	
	<script src="http://use.edgefonts.net/boogaloo:n4:default;didact-gothic:n4:default.js" type="text/javascript"></script>
</head>
<body>
    	<!-- header -->
	<header>
		<div class="header-logo-menu-wrapper">
			<div class="container header-logo-meniu">
						<div class="row">
							<nav class="navbar navbar-expand-lg">
								<div class="col-lg-3 col-md-3 col-4 header-logo-wrapper">
									<div class="header-logo">
										<a class="navbar-brand" href="">
											<img src="imagini/logo.png" width="100px">
										</a>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-8 header-meniu-wrapper">
									<div class="header-meniu">
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon">
											<i class="fa-solid fa-grip-lines"></i>
										</span>
										</button>
										<div class="collapse navbar-collapse" id="navbarNav">
											<div class="close-navbar-wrapper">
												<div class="close-navbar">
													<i class="fa-solid fa-xmark"></i>
												</div>
											</div>
											<ul class="navbar-nav">
												<li class="nav-item">
													<a class="nav-link" href="./index.html">Home</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="./despre.html">Despre</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="./galerie.html">Galerie</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="./servicii.html">Servicii</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="./contact.php">Contact</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</nav>

						</div>
			</div>
		</div>
	</header>
	<!-- end of header -->
    <section class="page-img-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="page-img-content-wrapper">
                        <div class="page-img-content">
                            <div class="page-img contact">
                                <div class="overlay-page-img">
                                    <div class="overlay-page-img-titlu">
                                        Contact
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact content -->
    <section id="contact-content">
        <div class="container contact-content-wrapper">
            <div class="row rand-contact-content">
                <div class="col-lg-5 col-md-5 col-12 contact-content-text-wrapper">
                    <div class="contact-content-text">
                        <div class="contact-content-subtitlu">
                            Adresa:
                        </div>
                        <div class="contact-content">
                            <span class="contact-content-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            str. Sibiu nr.3, sector 6, Bucuresti, Romania
                        </div>
                        <div class="contact-content-subtitlu">
                            Program:
                        </div>
                        <div class="contact-content">
                            <span class="contact-content-icon">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            Luni-Vineri; 8.30-19.00
                        </div>
                        <div class="contact-content-subtitlu">
                            Telefon/Whatsapp:
                        </div>
                        <div class="contact-content">
                            <span class="contact-content-icon">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <a href="tel:0722589212">0722589212</a>
                        </div>
                        <div class="contact-content-subtitlu">
                            Email:
                        </div>
                        <div class="contact-content">
                            <span class="contact-content-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <a href="mailto:contact@terapie4you.ro">
                                contact@terapie4you.ro
                            </a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 contact-content-form-wrapper">
                    <div class="contact-content-form">
                        <form method="post" id="contactForm" name="contactForm" class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Nume</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nume Complet">
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label class="label" for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subiect</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiect">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Mesaj</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Scrie mesajul tau aici..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Trimite mesaj" class="btn btn-primary" id="btn-trimite">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact content -->
    <!-- footer -->
	<footer>
		<div class="container">
			<div class="row footer-rand">
				<div class="col-lg-6 col-md-6 col-12 footer-utile-wrapper">
					<div class="footer-utile">
						<ul class="utile-list">
							<li class="footer-utile-item">
								<a href="./politica_confidentialitate.php" class="footer-utile-link">
									Politica de confidentialitate
								</a>
							</li>
							<li class="footer-utile-item">
								<a href="./drepturi_autor.html" class="footer-utile-link">
									Drepturi de autor
								</a>
							</li>
							<li class="footer-utile-item">
								<a href="./copyright.html" class="footer-utile-link">
									Copyright
								</a>
							</li>
							<li class="footer-utile-item">
								<a href="" class="footer-utile-link">
									ANPC
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12 footer-contact-wrapper">
					<div class="footer-contact">
						<ul class="footer-contact-list">
							<li class="footer-contact-item">
								<span class="contact-item-text">Telefon: </span>
								<span class="contact-item-tel">
									<a href="tel:0722589212" class="footer-contact-link">
										0722589212
									</a>	
								</span>
							</li>
							<li class="footer-contact-item">
								<span class="contact-item-text">E-mail: </span>
								<span class="contact-item-email">
									<a href="mailto:contact@terapie4you.ro" class="footer-contact-link">
										contact@terapie4you.ro
									</a>	
								</span>
							</li>
							<li class="footer-contact-item">
								<span class="contact-item-fb">
									<a href="https://www.facebook.com/Terapeut-Bowen-Lucretia-Bratulescu-101087418155185" target="_blank"> 
										<img src="imagini/869313c1a28de5e26095ffd744d1e7ba.jpg" width="40" height="40" alt=""/> </a>	
								</span>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end of footer -->
</body>
</html>