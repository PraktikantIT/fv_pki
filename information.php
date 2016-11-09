<?php

echo <<<EOD



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="Frankfurter Verein" />
<meta name="description" content="Frankfurter Verein" />
<title>Frankfurter Verein - IT - Digitaler Zertifizierungsdienst</title>
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="javascript/clean.js"></script>

</head>

<body>



<div id="fixdiv"></div>
<div id="bar"></div>
<div id="maindiv">
<div id="fvnimg"> <img src="img/Logo_Frankfurter_Verein.gif" alt="logo"></img>
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
		   

<p>Die PKI stellt die fuer den Einsatz von Verschluesselungs- und Authentifizerungsmechanismen notwendige Infrastruktur zur Verfuegung:<br>
<ul>

<li> die Wurzel-Zertifizierungsstelle "FV Root CA"
<li> die Zwischen- oder Stammzertifizierungsstelle "FV Intermediate CA"
<li> Awender-, Anwendungs- oder System-Zertifikaten
<li> Verwaltung und Betrieb
</ul>
</p>


<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
			
<div id="Ttitle"><h2>Allgemeine Informationen</h2></div>
</div>

</body>
</html>

EOD;

?>

