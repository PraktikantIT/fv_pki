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
	
<p>Ansprechpartner:<br>

Frankfurter Verein/IT Abteilung<br><br>

E-Mail: <a href="mailto:pki@frankfurter-verein.de">pki@frankfurter-verein.de</a><br>
Telefon: <a href="tel:+49697405405">069 7405 405</a><br>


<br>
Die IT Abteilung ist ihr Ansprechpartner fuer alle organisatorischen und technischen Fragen zur PKI. 


<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
			
<div id="Ttitle"><h2>Public Key Infrastruktur: PKI : Kontakt</h2></div>
</div>

</body>
</html>

EOD;

?>

