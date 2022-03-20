<?php
	// pathinfo give info about given file and returns it into an associative array:
$info = pathinfo( __FILE__ );

// the filename key holds file name without extension nor parent path:
$title = str_replace('_', ' ', ucwords( $info['filename'] ));
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

	<link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="./servicii.css">
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
												<li class="nav-item ">
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
													<a class="nav-link" href="./contact.html">Contact</a>
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
                            <div class="page-img politica-confidentialitate">
                                <div class="overlay-page-img">
                                    <div class="overlay-page-img-titlu">
                                        Politica de confidentialitate
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- politica confidentialitate content -->
    <section id="politica-wrapper">
        <div class="container politica-confidentialitate-content">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-titlu">
                        Politica de confidentialitate
                    </h2>
                    <div class="page-content">
                        <div class="page-subtitlu">
                            Declaratie introductiva
                        </div>
                        <div class="page-paragraph">
                            Terapie4you a creat această politică de confidențialitate pentru a descrie politicile și 
                            procedurile noastre de colectare, utilizare și divulgare a informațiilor vizitatorilor site-ului web.
                            Vă rugăm să citiți următoarea declarație pentru a afla mai multe despre politica noastră de confidențialitate și 
                            despre modul în care tratăm informațiile colectate de la vizitatorii și utilizatorii noștri.
                        </div>
                        <div class="page-paragraph">
                            Confidențialitatea și informațiilor vizitatorilor sunt o prioritate majoră pentru noi. 
                            Această politică de confidențialitate se aplică tuturor vizitatorilor și utilizatorilor 
                            acestui site web. Am încorporat această politică de confidențialitate și tuturor serviciilor 
                            oferite prin intermediul site-ului noastru web. Vă rugăm să citiți această politică cu atenție. 
                            Politica noastră de confidențialitate este în conformitate cu politicile GDPR 
                            (Regulamentul (UE) 2016/679) și explică modul în care procesăm informațiile și natura 
                            relației dintre noi, Terapie4you, ca entitate comercială, și dvs. utilizatorul, ca vizitator 
                            al nostru site-ul web. Terapie4you deține și administrează ; terapie4you.ro, site-ul web pentru 
                            care se aplică această politică de confidențialitate.
                        </div>
                        <div class="page-paragraph atentionare">
                            Va rugam sa:
                        </div>
                        <ul class="page-list">
                            <li class="page-list-item">
                                cititi cu atentie aceasta declaratie inainte de a utiliza acest site web
                            </li>
                            <li class="page-list-item">
                                Utilizarea acestui site web indica ca acceptati acesti termeni
                            </li>
                            <li class="page-list-item">
                                Daca nu acceptati acesti termeni , nu utilizati acest site web.
                            </li>
                        </ul>
                        <div class="page-subtitlu">
                            Datele pe care le colectam si in ce scop
                        </div>
                        <div class="page-paragraph">
                            Protecția datelor este o prioritate foarte mare pentru Terapage-list-itempie4you. Utilizarea Terapie4you.ro , 
                            este posibilă fără nicio specificare a datelor dumneavoastra cu caracter personal. Cu toate acestea, 
                            dacă doriți să utilizați servicii prin intermediul site-ului nostru web, prelucrarea datelor cu caracter 
                            personal ar putea deveni necesară.
                        </div>
                        <ol>
                            <li>
                                Date de utilizare a vizitatorilor site-ului web Pentru fiecare vizită pe Terapie4you, nu colectăm informații 
                                despre tipul de browser, informații despre cookie, numele domeniului, 
                                locația dvs. geografică, paginile vizualizate și de câte ori a fost vizualizat site-ul nostru.
                            </li>
                            <li>
                                Detalii de contact Colectăm informații de identificare personală predate voluntar de dvs. atunci când contactați 
                                Terapie4you, vă înscrieți la newsletter-ul nostru, descărcați materiale, participați la activități promoționale 
                                sau furnizați astfel de informații prin alte mijloace electronice. Informațiile de identificare personală pot 
                                include informații precum numele, adresa de e-mail, adresa fizică și numărul de telefon. Suntem dedicați securității 
                                și implementăm o varietate de măsuri de protecție pentru a menține siguranța informațiilor dvs. de identificare personală. 
                                Ne asigurăm că datele pe care ni le furnizați sunt prelucrate în mod corect și legal și utilizate numai în scopurile stabilite 
                                în această politică.
                                 Datele vor fi procesate, utilizate numai în scopul îndeplinirii cererii dvs. Nu împărtășim aceste date cu nicio terță parte.
                            </li>
                            </ol>
                            <div class="page-subtitlu">
                                Cookie-uri
                            </div>
                            <div class="page-paragraph">
                                Folosim o tehnologie standard numită „cookie” pentru a colecta informații despre modul în care utilizați 
                                și interacționați cu site-ul noastru web. Cookie-urile se află pe computerul dvs. și ajută .
                                un site web să recunoască browserul computerului sau al dispozitivului mobil ca vizitator 
                                anterior pentru a construi un profil al modului în care dvs. și alți utilizatori utilizați site-ul web. 
                                Dacă nu doriți ca informațiile să fie colectate prin utilizarea cookie-urilor, ar trebui să puteți modifica 
                                preferințele browserului pentru a dezactiva cookie-urile. Vizitatorii care accesează Terapie4you și nu doresc 
                                cookie-uri stocate pe computerele lor ar trebui să își seteze browserele să refuze cookie-urile înainte de a 
                                utiliza site-ul nostru sau orice alt site.
                                Puteți controla utilizarea cookie-urilor în browserul dvs. Utilizatorii pot găsi informații despre modul 
                                de gestionare a cookie-urilor în browserul 
                                lor la următoarele adrese: Google Chrome,Mozilla Firefox, Apple Safari, Microsoft Windows Explorer.Dacă nu 
                                doriți să fiți urmărit de Google Analytics pe toate site-urile, nu doar pe Terapie4you.ro, puteti 
                                să accesați http://tools.google.com/dlpage/gaoptout.
                            </div>
                            <div class="page-subtitlu">
                                Vă controlati datele- Informatii de identificare personala
                            </div>
                            <div class="page-paragraph">
                                Aveți dreptul de a fi informat cu privire la orice informații personale procesate despre dumneavoastra, 
                                dreptul la rectificare, ștergere și restricționarea prelucrării. În acest scop, aveți dreptul de a solicita printr-un mail , 
                                modificarea sau ștergerea oricărei informații personale. Mail-ul nostru este: contact@terapie4you.com
                            </div>
                            <div class="page-subtitlu">
                                Drepturile utilizatorului
                            </div>
                            <ol>
                                <li>
                                    Dreptul de confirmare. În calitate de utilizator, ne puteți contacta 
                                    pentru a primi confirmarea dacă procesăm sau nu datele dvs. personale.
                                </li>
                                <li>
                                    Dreptul de acces. Ca utilizator, ne puteți contacta pentru a obține informații 
                                    despre stocarea datelor dvs. personale stocate în orice moment și o copie a acestor informații.
                                </li>
                                <li>
                                    Dreptul la rectificare. În calitate de utilizator aveți dreptul de a rectifica 
                                    informațiile incomplete sau inexacte pe care le stocăm despre dvs.
                                </li>
                                <li>
                                    Dreptul la ștergere. În calitate de utilizator aveți dreptul de 
                                    a obține ștergerea datelor personale pe care le stocăm despre dvs. 
                                    fără întârziere.
                                </li>
                                <li>
                                    Dreptul la restricționarea prelucrării. În calitate de utilizator, aveți dreptul 
                                    de a obține de la noi o restricție de prelucrare a datelor dvs. personale, conform 
                                    prevederilor legii aplicabile privind protecția datelor.
                                </li>
                                <li>
                                    Dreptul de a retrage consimțământul. În cazul în care procesarea 
                                    noastră se bazează pe consimțământul dvs. ca utilizator, puteți retrage 
                                    consimțământul în orice moment, contactându-ne.
                                </li>
                            </ol>
                            <div class="page-subtitlu">
                                Cum se utilizeaza aceste drepturi
                            </div>
                            <div class="page-paragraph">
                                Pentru a utiliza oricare dintre drepturile menționate mai sus, ne puteți 
                                trimite un e-mail la adresa din secțiunea de contact, inclusiv următoarele 
                                informații: numele dvs. și adresa de e-mail. Putem solicita informații suplimentare 
                                necesare pentru a vă confirma identitatea. 
                                Putem respinge cererile care sunt nerezonabil de repetate, excesive sau vădit nefondate.
                            </div>
                            <div class="page-subtitlu">
                                Securitatea datelor
                            </div>
                            <div class="page-paragraph">
                                Securitatea datelor este foarte importantă pentru noi, de aceea f
                                olosim procese, metode și măsuri administrative pentru a ne asigura 
                                că toate datele pe care le colectăm sau le procesăm sunt protejate 
                                în siguranță. Cu toate acestea, am dori să subliniem că transmisiile 
                                de date prin internet (de exemplu, comunicarea prin e-mail) nu pot fi 
                                în întregime sigure și pot avea vulnerabilități de securitate. O protecție 
                                completă a detaliilor personale împotriva accesului neautorizat de către terți nu este posibilă.
                            </div>
                            <div class="page-subtitlu">
                                Dispozitii privind protectia datelor despre widget-urile de socializare
                            </div>
                            <div class="page-paragraph">
                                Pe acest site web, controlerul are componente integrate ale funcțiilor de social media, 
                                precum butonul Facebook, butonul Twitter , butonul Linkedin și butonul Mail, care rulează pe 
                                site-ul nostru. Aceste caracteristici pot colecta adresa dvs. IP, pe ce pagină vizitați pe site-ul 
                                nostru și pot seta un cookie pentru a permite funcției să funcționeze corect. Funcțiile și widgeturile
                                 pentru rețelele sociale sunt găzduite de o terță parte. Interacțiunile dvs. cu aceste funcții sunt 
                                 guvernate de politica de confidențialitate a companiei care le furnizează.
                                Nu suntem responsabili pentru practicile utilizate de site-urile web sau serviciile 
                                legate de sau de la Terapie4you, inclusiv informațiile sau conținutul conținut în acestea. 
                                Vă rugăm să rețineți că atunci când utilizați un link pentru a merge de pe site-ul nostru 
                                la un alt site sau serviciu, Politica noastră de confidențialitate nu se aplică site-urilor 
                                sau serviciilor terțe. Navigarea și interacțiunea dvs. pe orice site sau serviciu terță parte,
                                 inclusiv cele care au un link sau o reclamă pe site-ul nostru, sunt supuse regulilor și politicilor 
                                 proprii ale terțelor părți.
                            </div>
                            <div class="page-subtitlu">
                                Link-uri către alte site-uri web
                            </div>
                            <div class="page-paragraph">
                                Nu suntem responsabili pentru practicile utilizate de site-urile web sau serviciile 
                                legate de sau de la Terapie4you, inclusiv informațiile sau conținutul conținut în acestea. 
                                Vă rugăm să rețineți că atunci când utilizați un link pentru a merge de pe site-ul nostru la 
                                un alt site sau serviciu, Politica noastră de confidențialitate nu se aplică site-urilor sau 
                                serviciilor terțe. Navigarea și interacțiunea dvs. pe orice site sau serviciu terță parte, 
                                inclusiv cele care au un link sau o reclamă pe site-ul nostru, sunt supuse regulilor și 
                                politicilor proprii ale terțelor părți.
                            </div>
                            <div class="page-subtitlu">
                                Conformitate cu legea privind protectia confidentialitatii online a copiilor
                            </div>
                            <div class="page-paragraph">
                                Respectăm cerințele COPPA (Childrens Online Privacy Protection Act) și nu colectăm cu bună știință nicio informație de la nimeni sub 18 ani. Site-ul nostru web, serviciile noastre sunt destinate persoanelor care au cel puțin 18 ani sau mai mult.
                            </div>
                            <div class="page-subtitlu">
                                Modificari ale politicii noastre de confidentialitate
                            </div>
                            <div class="page-paragraph">
                                Este posibil să corectăm din când în când această politică din cauza modificărilor 
                                din legislație. Asigurați-vă că țineți evidența modificărilor și consultați regulat această
                                 politică. Dacă utilizați acest sau oricare
                                 alt site-ul nostru web după efectuarea modificărilor, acest lucru înseamnă că acceptați modificările
                            </div>
                            <div class="page-paragraph">
                                Toate datele sunt procesate și controlate de Terpaie4you. Dacă aveți întrebări 
                                despre cum sunt procesate informațiile dvs., vă rugăm să ne contactați la : Telefon: +040722589212
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of politica confidentialitate content -->
    <!-- footer -->
	<footer>
		<div class="container">
			<div class="row footer-rand">
				<div class="col-lg-6 col-md-6 col-12 footer-utile-wrapper">
					<div class="footer-utile">
						<ul class="utile-list">
							<li class="footer-utile-item">
								<a href="./politica_confidentialitate.html" class="footer-utile-link">
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