<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!--- Basic Page Needs
   ================================================== -->
	<meta charset="utf-8">
	<title>Olena's bookshelf</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media-queries.css">

	<!-- Script
   =================================================== -->
	<script src="js/modernizr.js"></script>

	<!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="letter_o.png">

</head>

<body class="pocetna">

	<div id="preloader">
		<div id="status">
			<img src="images/loader.gif" height="60" width="60" alt="">
			<div class="loader">Loading...</div>
		</div>
	</div>
	<!-- Header
   =================================================== -->
	<header id="main-header">

		<div class="row header-inner">
			<div class="logo">
				<a class="smoothscroll" href="#logo">Olena's bookshelf</a>
			</div>

			<nav id="nav-wrap">

				<a class="mobile-btn" href="#nav-wrap" title="Show navigation">
					<span class='menu-text'>Show Menu</span>
					<span class="menu-icon"></span>
				</a>
				<a class="mobile-btn" href="#" title="Hide navigation">
					<span class='menu-text'>Hide Menu</span>
					<span class="menu-icon"></span>
				</a>

				<ul id="nav" class="nav">
					<li class="current"><a class="smoothscroll" href="#logo">Olena's bookshelf</a></li>
					<li><a class="smoothscroll" href="#pocetna">Pocetna</a></li>
					<li><a class="smoothscroll" href="#omeni">O meni</a></li>
					<li><a class="smoothscroll" href="#blog">Blog</a></li>
					<li><a class="smoothscroll" href="#izaberiknjigu">Izaberi knjigu</a></li>
					<li><a class="smoothscroll" href="#kontakt">Kontakt</a></li>

				</ul>

			</nav> <!-- /nav-wrap -->

		</div> <!-- /header-inner -->

	</header>


	<!-- Hero
   =================================================== -->
	<section id="pocetna">

		<div class="row hero-content">

			<div class="twelve columns flex-container">

				<div id="hero-slider" class="flexslider">

					<ul class="slides">

						<!-- Slide -->
						<li>
							<div class="flex-caption">
								<h1>Zdravo, dobro došli u Oleninu oazu mira!</h1>
								<p><a class="button stroke smoothscroll" href="#onama">Više o nama</a></p>
							</div>
						</li>

						<!-- Slide -->
						<li>
							<div class="flex-caption">
								<h1><a class="smoothscroll" href="#kontakt" title="">Kontaktirajte nas</a> za sva pitanja i nedoumice</h1>
								<p><a class="button stroke smoothscroll" href="#kontakt">Kontaktirajte nas</a></p>
							</div>
						</li>

					</ul>

				</div> <!-- .flexslider -->

			</div> <!-- .flex-container -->

		</div> <!-- .hero-content -->

	</section> <!-- #hero -->


	<!-- Portfolio
   ================================================== -->
	<section id="portfolio">

		<div class="row section-head">

			<div class="twelve columns">

				<h1>Moje omiljene</h1>

				<hr />

				<p>Sa ciljem da ljubitelje čitanja informišem o delima koja, možda još uvek nisu pročitali, kao i da u novim generacijama probudim ljubav i interesovanje za taj način provođenja slobodnog vremena.
				</p>

			</div>

		</div>

		<div class="row items">

			<div class="twelve columns">

				<div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

					<div class="bgrid item">
						<div class="item-wrap">

							<img src="images/goodgirl.png" alt="goodgirl">
							<div class="overlay"></div>
							<div class="portfolio-item-meta">
								<h5>Holly Jackson</h5>
								<p> A GOOD GIRL'S GUIDE TO MURDER</p>
								<p>id: 1</p>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/decak.png" alt="decak">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Samuel Bjerk</h5>
									<p>DEČAK KOJI JE VOLEO JELENE</p>
									<p>id: 2</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid stack item">
						<div class="item-wrap">
							<img src="images/zena.png" alt="zena">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Donato Karizi</h5>
									<p>ŽENA SA CVETOM OD PAPIRA</p>
									<p>id: 3</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/tihipacijent.png" alt="tihipacijent">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Aleks Majklidis</h5>
									<p>TIHI PACIJENT</p>
									<p>id: 4</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/spisakzvanica.png" alt="spisakzvanica">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Lusi Foli</h5>
									<p>SPISAK ZVANICA</p>
									<p>id: 5</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/starac.png" alt="starac">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Ross Welford</h5>
									<p>THE 1000 YEAR OLD BOY</p>
									<p>id: 6</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/maslina.png" alt="maslina">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Lusinda Rajli</h5>
									<p>U SENCI MASLINE</p>
									<p>id: 7</p>
								</div>
							</div>

						</div>
					</div> <!-- /item -->

					<div class="bgrid item">
						<div class="item-wrap">
							<img src="images/nedaj.png" alt="nedaj">
							<div class="overlay">
								<div class="portfolio-item-meta">
									<h5>Kazuo Išiguro</h5>
									<p>NE DAJ MI NIKADA DA ODEM</p>
									<p>id: 8</p>
								</div>
							</div>

						</div>
					</div> <!-- item end -->

				</div> <!-- /portfolio-wrapper -->

			</div> <!-- /twelve -->

		</div> <!-- /row -->

	</section> <!-- /Portfolio -->




	<!-- About Section
   ================================================== -->
	<section id="omeni">

		<div class="row section-head">

			<div class="twelve columns">

				<h1>Ko sam ja</h1>

				<hr />

				<p>Jedan običan ljubitelj knjiga, koji je svoju ljubav pretvorio u hobi i želi da deli svoje pozitivne i negativne kritike o knjigama sa svim zainteresovanim posetiocima.
				</p>

			</div>

		</div>

		<div class="row about-content">

			<div class="mob-whole six columns left">

				<h3>Ja sam...</h3>

				<p>Ćerka, sestra, devojka, student, zaljubljenik u umetnost, romantičar, ljubitelj hrane, posetilac žurki, simpatizer životinja, avanturista, gitarista(laički, naravno), odbojkašica, član hora...
				</p>

			</div> <!-- /left -->

			<div class="mob-whole six columns right">

				<h3>Moja postignuća</h3>

				<p>Završila sam VI beogradsku gimnaziju, kao odličan đak, sa diplomom iz srpskog jezika, zbog raznih takmičenja iz književnosti na kojima sam učestvovala i postizala odlične rezultate.
					Kao logičan sled okolonosti, upisujem Filološki fakultet, Srpski jezik i književnost, i od tog dana moja ljubav i očaranost knjigama samo raste.
				</p>

			</div> <!-- /right -->

		</div> <!-- /row -->

		<div class="row about-content">

			<div class="mob-whole six columns left">

				<h3>Moj cilj</h3>

				<p>Tu sam kako bih podelila sa vama svoja iskustva, mišljenje i ideje. Da uzajamno delimo savete i da proširimo ljubav koju imamo prema knjigama na nekoga ko ju možda još uvek nije osetio.
				</p>

			</div> <!-- /left -->

			<div class="mob-whole six columns right">

				<h3>Moja poruka Vama</h3>

				<p>Još kao mala volela sam knjige, naravno počelo je sa Pričom o tri praseta, ili Snežana i sedam patuljaka, ne sećam se. E obično tu deca i stanu, period kad roditelji prestanu da im čitaju pred spavanje, jer mogu i bez toga da zaspe, što, po mom mišljenju, ne znači da ne treba pročitati nešto.

				</p>

			</div> <!-- /right -->

		</div> <!-- /row -->



		<!-- journal
   =================================================== -->
		<section id="blog">

			<div class="row section-head">

				<div class="twelve columns">

					<h1>Blog</h1>

					<hr />

					<p> Prošetaću Vas malo kroz par pročitanih knjiga koje su na mene ostavile najveći utisak.
					</p>

				</div>

			</div>

			<div class="row">

				<div class="twelve columns">

					<div id="blog-wrapper" class="bgrid-third s-bgrid-half mob-bgrid-whole group">

						<article class="bgrid">

							<h5>Septembar, 2021</h5>
							<h3>Dekodirani Da Vinčijev kod</h3>

							<p>~Dekodirani Da Vinčijev kod-Ejmi Velborn~
								Svi smo upoznati sa delom i likom Dena Brauna, i dragog nam Toma Henksa, nosioca glavne uloge u ekranizaciji Braunovih romana. Kada guglate Braunovo ime izaći će vam da je on jedan od poznatijih pisaca trilera, dok se on sam izjašnjava kao pisac istorijskih misterija. Mnogi ljudi vole da čitaju istorijske romane, jer im je to način da se povežu sa određenim delom istorije, ali to ovde nije slučaj. Kako sam Braun kaže: "istoriju pišu pobednici". U njegovom slučaju, pobednici su oni koji imaju bolji marketing.
								U svom romanu "Da Vinčijev kod" Braun nam je predstavio spisak literature koju je koristio za pisanje istog. Što bi nekima bilo dovoljno da ne sumnjaju u autentičnost dela, ALI , to nije bilo dovoljno Ejmi Velborn, koja je odlučila da zasuče rukave, i raskrinka Brauna, i verujte mi to je uradila sjajno. Ja sam lično imala neku vrstu love-hate odnosa sa Braunovim romanom, sve dok nisam otkrila ovo blago koje se tako lukavo krilo na policama mojih roditelja sve ove godine. U "Dekodiranom Da Vinčijevom kodu" nećete naći delo koje je je žanrovski fantastično, i koje obiluje izvanrednim stilom pisanja. Naprotiv, autorka je iskoristila priliku da čitaocima obelodani ono što im je plasirano kao istorija. Razlika je u tome što je autorka potkovana pravim argumentima.
								Sada, mnogi će reći: "Ali to je samo roman". Da li to što je "samo roman" opravdava lažno predstavljanje kulturoloških, religijskih, istorijskih i geografskih činjenica zarad lične koristi? Postoje ljudi koji veruju i u onu najmanje poznatu teoriju zavere, nećemo da se lažemo. Ono što je na mene ostavilo najsnažniji utisak jeste poglavlje o samom Leonardu Da Vinčiju. Moraću da citiram autorku: "...autor(Braun) koji nije u stanju da navede ime glavnog lika u svojoj knjizi ne bi trebalo da nam posluži kao učitelj istorije". Možemo naći detaljnije objašnjenje o Leonardovom životu, slikama, pogotovo o "Poslednjoj večeri" koja je izazvala kontroverzu, ali i o verskim uverenjima i životu.
								Beskrajno sam uživala u ovoj knjižici, naročito u autorkinim izlivima besa prema Braunu.
							</p>

						</article>

						<article class="bgrid">

							<h5>Oktobar, 2021</h5>
							<h3>Zapisi iz podzemlja</h3>

							<p>~Zapisi iz Podzemlja-Dostojevski~
								Još od srednjoškolskih dana, ruska književnost i ja smo na "Vi". Taj odnos se dodatno zakomplikovao kada mi je posle "Rata i Mira" profesorka zvanično objavila rat, ali nečije genijalnosti ne mogu da se ospore. Kad smo kod genijalnosti, da se vratim na Dostojevskog.
								Priču pratimo iz ugla izmišljenog junaka u vidu memoara iz podzemlja njegove duše. Junak, zapravo antijunak je rastrzan između superiornog i inferiornog, odnosno kako on samog sebe karakteriše- umno nadmoćnim ali socijalno neprihvaćenim.
								Delo koje se ne može okarakterisati lako, u bilo kom pogledu. Sav (be)smisao čovekovog postojanja pretočen na papir. Kao neko ko je čitav život posvetio proučavanju ljudske duše, Dostojevski se smatra vrhunskim psihoanalitičarem i psihologom i pre nego što je to postala nauka.
								Iako ja, priznajem, nisam njemu pridavala onoliko pažnje koliko je to možda bilo potrebno, bez celog njegovog opusa danas ne bismo spoznali egzistencijalizam koji je kao takav služio Kamiju, Ničeu i drugima.
								Elem, egzistencijalizam. I te kako potreban. A šta je još potrebnije? Surov egzistencijalizam. A to nam ovo delo pruža. Potreban nam je da bismo uvideli koliko smo napredovali(ili pak nismo?!) i kao civilizacija i kao čovečanstvo.
								Imajući u vidu kada je ovo delo napisano, tužna je spoznaja da je maltene sve isto. Čovek kao produkt društva, prividan život. Nakon čitanja ovog dela ili ćete postati svesni(ji) ili ćete se naći uvređenim.
								Ali sasvim je sigurno da će vam reči ovog antijunaka dugo odzvanjati u glavi, jer je ovo jedno od onih dela koje zahteva više od jednog čitanja kako bi se doprlo do prave pravcate suštine.
								U poslednje vreme se stvorila neka averzija prema klasicima. Što donekle i razumem, jer kako je lepo Mark Tven sročio: "Klasik je knjiga koju svi veličaju, a ne čitaju". Ali ne dozvolite da vas averzija spreči od čitanja zaista vrednih dela.
							</p>

						</article>

						<article class="bgrid">

							<h5>Decembar, 2021</h5>
							<h3>Nestanak Eni Torn</h3>

							<p>~Nestanak Eni Torn-Si Džej Tjudor~
								Koliko insistiram na tome da najviše volim da čitam trilere, ne posvećujem im onoliko vremena koliko bih želela, što dovodi do toga sa krajnji utisak bude drugačiji od uobičajenog. Ovu knjigu sam merkala odavno, i nedavno sam odlučila da joj dam šansu.
								Eni, osmogodišnja devojčica, je nestala jedne noći. Međutim, vratila se posle 48h. Ali, da li je to bila ista Eni?
								Strah. Jeza. Tuga. Ovo su samo neke od reči na koje prvo pomislim na pomen ove knjige. Iako me je par ljudi savetovalo da prvo pročitam "Čiča Glišu" od istoimene autoruke, prešla sam direktno na Eni. Autorka baš ume da vam zaledi krv u žilama, i da vas tera da doslovno gutate stranice ove knjige.
								Međutim, moj utisak je: Tipično. Tipično mesto radnje- mali grad sa tajnama i mračnom istorijom. Tipičan motiv dece. Nemojte me shvatiti pogrešno, ova knjiga ima sve, i žanrovski ne spada samo u trilere, ova knjiga je i horor i misterija. Likovi su izuzetno uverljivi, toliko vam se uvuku pod kožu, da se osećate kao da se poznajete ceo život.
								Kod ove knjige je i ona naizgled nebitna, mala rečenica, u stvari vrlo bitna za samu suštinu priče. Ono što se meni izuzetno dopalo jeste to što roman obiluje tipičnim britanskim humorom, crnim i samom po sebi ironičnim.
								Za autorku se kaže da je britanski Stiven King. Ono što mi se u romanu nije dopalo jeste to što je autorka svesno, ili nesvesno "pozajmila" delove iz Kingovih dela, konkretno mislim na "Groblje kućnih ljubimaca" i "Zelenu Milju". Moja konačna ocena je 4⭐️
							</p>

						</article>

						<article class="bgrid first">

							<h5>Februar, 2022</h5>
							<h3>Surova ljubav</h3>

							<p>
								~Kolin Huver-Surova Ljubav~
								Nakon što sam pročitala "Sa nama se završava" od iste autorke, odlučila sam da bacim pogled i na ovu knjigu, a to se odigralo tako što je satima nisam ispuštala iz ruke i zato što me je knjiga maksimalno oduvala.
								Tejt se privremeno useljava kod svog brata, sa jasnim ciljem, ali sve se menja kada upozna neodoljivog Majlsa Arčera koji živi preko puta. Naizgled sve izgleda da će biti lako, ali da li je to istina? Šta se događa kad se oboje upuste u strastvenu vezu, odnosno da li su spremni za posledice?
								Za razliku od prethodne autorkine knjige koju sam pročitala, ova mi malo više naginje ka onom ljubavnom delu, samo što ovo nije pravi "ljubić" nego više ljubavna drama prožeta strašću i jakim emocijama.
								Ono što mi se izuzetno dopalo jeste to što Kolin baš ume da stvori tu osetnu hemiju između parova i da vas natera da poželite još. Taman kada pomislite nešto, steknete utisak kako će se radnja dalje odvijati, autorka je tu da vas čvrsto razuveri u to. Negde sam pročitala da je ovo malo "smelija" knjiga Kolin Huver, ali mislim da je apsolutno ovladala tim "New Adult" žanrom.
								Volim što su me obe njene knjige koje sam do sada pročitala uvukle u svoje kandže i nisu mi dale da prodišem do kraja. Ali nisam mogla da ne primetim da ima određenih sličnosti u njima.
								Što se "Surove ljubavi" tiče, kraj je za moj ukus malo zbrzan, ali to nije pokvarilo celokupni utisak. Moje najtoplije preporuke.
							</p>

						</article>

						<article class="bgrid">

							<h5>April, 2022</h5>
							<h3>Beležnica neizgovorenog</a></h3>

							<p>
								~Kler Puli- Beležnica neizgovorenog~
								Nakon što sam, krajem marta meseca napravila kiks čitajući knjige sa teškom tematikom, koje su bile sve samo ne teške, bilo mi je potrebno nešto slatko, pitko i nešto što će pre svega da me oraspoloži i razveseli. Sada kada je prošao određeni broj dana od čitanja ove knjige, i kada se osvrnem, mogu da kažem da je "Beležnica neizgovorenog" bila pun pogodak.
								Sigurna sam da i ptice na grani znaju o čemu se radi, ali na meni je da dodam, da je ovo po mom mišljenju jedna lepa mešavina knjiga "Čovek po imenu Uve" i "Srećni ljudi čitaju i piju kafu" . Ako su vam se one dopale- i ova će! Takođe, da napomenem, ovo nije knjiga koja će vam promeniti život, ali ćete u njoj uživati, i prava je stvar ako se, recimo, borite sa čitalačkom krizom.
								Ono što se meni najviše dopalo jeste humor kojim obiluje knjiga, jer sam se zaista u par navrata smejala kao luda. Međutim autorka je sa istim tim humorom znala i da pređe granicu, ali je i kao takav i dalje bio daleko od degutantnog. S obzirom na to da ova knjiga u originalu nosi naziv "The authenticity project" ,
								ja sam je shvatila kao autorkin pokušaj da predstavi da nije sve tako kako izgleda, pogotovo ne na internetu i u svetu u kome je sve dostupno, pored autobiografskih elemenata. Jer ako dovoljno puta izgovorimo jednu laž, ona postaje naša istina.
								Suma sumarum, nakon samo par prevrtanja očima, dolazim do zaključka da je ova knjiga stvarno bila pravo osveženje, pritom što predstavlja izlazak iz moje zone komfora što se čitanja tiče. Od mene imate preporuku. ✨
							</p>

						</article>

						<article class="bgrid">

							<h5>Jun, 2022</h5>
							<h3>We were liars</h3>

							<p>~E.Lockhart-We were liars~
								Ono što prvo treba da znate o ovoj knjizi jeste da nema sinopsisa na kakve smo navikli. Na poleđini samo piše "We are liars. We are beautiful and privileged. We are cracked and broken. A tale of love and romance. A tale of tragedy. Which are lies. Which is truth? You decide". I konstantno ponavljanje ove knjige na stranom bukstagramu i tiktoku, uz priču kako je ovo jedna od onih knjiga posle kojih vam se duša prepolovi, je meni bilo zeleno svetlo da je poručim i sama se uverim o njenom kvalitetu. I nimalo se nisam pokajala.
								O čemu se radi? Protagonstkinja Cadence Sinclair nas upoznaje sa svojom porodicom koja svako leto provodi na privatnom ostrvu, jer njen deka raspolaže velikim materijalnim bogatstvom. Zvuči sjajno zar ne? Međutim realna slika je izvitoperenija nego što možemo i da zamislimo, jer ubrzo saznajemo da Cadence pati od amnezije usled nesreće koju je doživela, i spremna je da ide do kraja kako bi otkrila istinu o onome što se dogodilo.
								Primetićete da sam gore iskoristila sintagmu "materijalno bogatatvo" - iz razloga što je to jedino u izobilju kada su u pitanju Sinclairovi. Prikazuje nam se slika jedne idealne porodice, a što više prodiremo u priču, zapažamo kako su materijalistički i rasistički nastrojeni, spremni na sve zarad mesta za stolom. I taman kada pomislimo da su nam sve emocije izazvali članovi ove porodice i da ništa više ne može da nas iznenadi, onda je nastupio
								Kraj.Razarajući, bolni kraj. 10 dana se kanim da napišem utiske o ovoj knjizi koja me je emotivno raznela. Knjige posle koje sam slepo gledala u jednu tačku na zidu, i posle koje sam isplakala more suza. Knjiga posle koje danima nisam bila u stanju da čitam bilo šta, jer sam samo razmišljala o njoj. Za nečiji ukus je možda ovo patetično, svesna sam toga, ali ovo je jedna od knjiga koja zaslužuje da se o njoj vrišti, knjiga koja topi najhladnija srca i knjiga koja treba da se doživi.
							</p>

						</article>

					</div> <!-- /blog-wrapper -->

				</div> <!-- /twelve -->

			</div> <!-- /row -->

		</section> <!-- /blog -->
		<section id="izaberiknjigu">

			<div class="row section-head">

				<div class="twelve columns">

					<h1>IZABERI SVOJU KNJIGU</h1>
					<hr />
				</div>
			</div>
			<div class="col-md-5 mx-auto">
				<?php

				include 'model.php';
				$model = new Model();
				$insert = $model->insert();

				?>
				<form action="" method="post">
					<div class="form-group">
						<label for="">id</label>
						<input type="text" name="id" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Ime</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Prezime</label>
						<input type="text" name="lastname" class="form-control">
					</div>
					<div class="form-group">
						<label for="">id_zaduzene_knjige</label>
						<input type="text" name="id_zaduzene_knjige" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			</div>
			</div>
			</div>
		</section>


		<!-- Contact Section
   ================================================== -->
		<section id="kontakt">

			<div class="row section-head">

				<div class="twelve columns">

					<h1>KONTAKTIRAJ ME</h1>

					<hr />

					<p>Tu sam za sva pitanja, nedoumice, savete, preporuke...
					</p>

				</div>

			</div>

			<div class="row form-section">

				<div id="contact-form" class="twelve columns">

					<form name="contactForm" id="contactForm" method="post" action="">

						<fieldset>

							<div class="row">

								<div class="six columns mob-whole">
									<label for="contactFname">Ime <span class="required">*</span></label>
									<input name="contactFname" type="text" id="contactFname" placeholder="Ime" value="" />
								</div>

								<div class="six columns mob-whole">
									<label for="contactLname">Prezime <span class="required">*</span></label>
									<input name="contactLname" type="text" id="contactLname" placeholder="Prezime" value="" />
								</div>

							</div>

							<div class="row">

								<div class="six columns mob-whole">
									<label for="contactEmail">Email <span class="required">*</span></label>
									<input name="contactEmail" type="text" id="contactEmail" placeholder="Email" value="" />
								</div>

								<div class="six columns mob-whole">
									<label for="contactSubject">Naslov</label>
									<input name="contactSubject" type="text" id="contactSubject" placeholder="Naslov" value="" />
								</div>

							</div>

							<div class="row">

								<div class="twelve columns">
									<label for="contactMessage">Poruka <span class="required">*</span></label>
									<textarea name="contactMessage" id="contactMessage" placeholder="Poruka" rows="10" cols="50"></textarea>
								</div>

							</div>

							<div>
								<button class="submit full-width">Pošalji</button>
								<div id="image-loader">
									<img src="images/loader.gif" alt="" />
								</div>
							</div>

						</fieldset>

					</form> <!-- /contactForm -->

					<!-- message box -->
					<div id="message-warning"></div>
					<div id="message-success">
						<i class="fa fa-check"></i>Poruka je poslata, hvala Vam!<br />
					</div>

				</div> <!-- /contact-form -->

			</div> <!-- /form-section -->

		</section> <!-- /contact-->


		<!-- Footer
   ================================================== -->
		<footer>

			<div class="row">

				<div class="six columns tab-whole footer-about">

					<h3>Olena's</h3>

					<p>Skromna knjižarica, otvorena iz čiste ljubavi sa željom da istu prenesem na Vas.
					</p>

					<p>Dođite da razmenimo mišljenja, preporuke, ideje za sledeću knjigu, koju možda baš nađete kod nas.</p>

				</div> <!-- /footer-about -->

				<div class="six columns tab-whole right-cols">

					<div class="row">

						<div class="columns">
							<h3 class="address">Kontaktirajte nas</h3>
							<p>
								11000 Beograd<br>
								Knez Mihailova 44<br>
							</p>

							<ul>
								<li><a href="tel:6473438234">647.343.8234</a></li>
								<li><a href="tel:1234567890">123.456.7890</a></li>
								<li><a href="mailto:olenasbookshelf@gmail.com">olenasbookshelf@gmail.com</a></li>
							</ul>
						</div> <!-- /columns -->

						<div class="columns last">
							<h3 class="contact">Zapratite me</h3>

							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
							</ul>

						</div> <!-- /columns -->

					</div> <!-- /Row(nested) -->

				</div>

				<div id="go-top">
					<a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
				</div>

			</div> <!-- /row -->

		</footer> <!-- /footer -->


		<!-- Java Script
   ================================================== -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
		</script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/backstretch.js"></script>
		<script src="js/waypoints.js"></script>
		<script src="js/main.js"></script>

</body>

</html>