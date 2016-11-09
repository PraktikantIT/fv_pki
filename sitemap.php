<?php

echo <<<EOD



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="Frankfurter Verein" />
<meta name="description" content="Frankfurter Verein" />
<title>Frankfurter Verein Wurzelzertifizierungsstelle</title>
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="javascript/clean.js"></script>

</head>

<body>


<div id="fixdiv"></div>
<div id="bar"></div>
<div id="maindiv">
<div id="fvnimg"> <img src="img/Logo_Frankfurter_Verein.gif" alt="logo"></img></div>
<div id="topmenu">
		<ul>		
		
		</ul>
</div>
<div id="navi">

EOD;


include ("menu/navi.php");


echo <<<EOD

</div>					
<div id="menu">

EOD;



include ("menu/menu.php");



echo <<<EOD

</div>		
<div id="content">			   
<ul>
	<li style="list-style-type:none"><a href="information.php"> PKI</a></li>
	<li style="list-style-type:none"><a href="http://frankfurter-verein.de/verein.html?view=pagecontents"> Frankfurter Verein</a></li>
	<li style="list-style-type:none"><a href="http://frankfurter-verein.de/einrichtungen-a-dienste.html?view=pagecontents">Einrichtungen & Dienste</a></li>
	<li style="list-style-type:none"><a href="information.php">Allgemeine Informationen</a></li>
	<li style="list-style-type:none"><a href="externe_anwender.php">Externe Anwender</a></li>
	<li style="list-style-type:none"><a href="encrypted_email.php">Verschluesselte Email </a></li>
	<li style="list-style-type:none"><a href="search.php">Zertifikats Suche</a></li>			
	<li style="list-style-type:none"><a href="index.php">Zertifizierungsstellen</a></li>
	<ul>
	<li style="list-style-type:none"><a href="root_ca.php">FV Root CA</a></li>
	<li style="list-style-type:none"><a href="intermediate_ca.php">FV Intermediate CA</a></li>
	</ul>
	<li style="list-style-type:none"><a href="kontakt.php">Kontakt</a></li>	
	<li style="list-style-type:none"><a href="hilfe.php">Hilfe</a></li>
	<li style="list-style-type:none"><a href="http://frankfurter-verein.de/datenschutz.html">Da­ten­schutz</a></li>
	<li style="list-style-type:none"><a href="not issued.php">Be­nut­zer­hin­wei­se</a></li>
	<li style="list-style-type:none"><a href="not issued.php">Haf­tungs­aus­schluss</a></li>
	<li style="list-style-type:none"><a href="http://frankfurter-verein.de/impressum.html">Im­pres­s­um</a></li>
	<li style="list-style-type:none"><a href="sitemap.php">Sitemap</a></li>
</ul>
<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
			
<div id="Ttitle"><h2>Sitemanp</h2></div>
</div>

</body>
</html>

EOD;

?>

