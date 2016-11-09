
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
			<li style="display: inline;"><a href="http://frankfurter-verein.de/verein/adresse.html"></a></li>
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


<h3>Administrativer Ansprechpartner: </h3>
<ul>
<li> CA - Verwaltung: pki@frankfurter-verein.de
</ul>


<h3>Zertifikate: "FV Root CA" </h3>


<h4 >DER Format:   <svg  id="der" width="18" height="18" viewBox="0 0 44 44" enable-background="new 0 0 44 44">
  <path d="M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0z M15.3,18.3l1.4-1.4c0.2-0.2,0.4-0.3,0.7-0.3  c0.3,0,0.5,0.1,0.7,0.3l1,1c0.3,0.3,0.9,0.1,0.9-0.4V11c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v6.6c0,0.4,0.5,0.7,0.9,0.4l1-1  c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0.1,0.7,0.3l1.4,1.4c0.2,0.2,0.3,0.4,0.3,0.7s-0.1,0.5-0.3,0.7l-6,6c-0.2,0.2-0.5,0.3-0.7,0.3  s-0.5-0.1-0.7-0.3l-6-6c-0.2-0.2-0.3-0.4-0.3-0.7C15,18.7,15.1,18.5,15.3,18.3z M35,33c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1v-6  c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v2.5c0,0.3,0.2,0.5,0.5,0.5h17c0.3,0,0.5-0.2,0.5-0.5V27c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1V33z"/>
</svg> </h4>

<h4>PEM Format:     <svg id="pem"  width="18" height="18" viewBox="0 0 44 44" enable-background="new 0 0 44 44">
  <path d="M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0z M15.3,18.3l1.4-1.4c0.2-0.2,0.4-0.3,0.7-0.3  c0.3,0,0.5,0.1,0.7,0.3l1,1c0.3,0.3,0.9,0.1,0.9-0.4V11c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v6.6c0,0.4,0.5,0.7,0.9,0.4l1-1  c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0.1,0.7,0.3l1.4,1.4c0.2,0.2,0.3,0.4,0.3,0.7s-0.1,0.5-0.3,0.7l-6,6c-0.2,0.2-0.5,0.3-0.7,0.3  s-0.5-0.1-0.7-0.3l-6-6c-0.2-0.2-0.3-0.4-0.3-0.7C15,18.7,15.1,18.5,15.3,18.3z M35,33c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1v-6  c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v2.5c0,0.3,0.2,0.5,0.5,0.5h17c0.3,0,0.5-0.2,0.5-0.5V27c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1V33z"/>
</svg> </h4>

<br>


<h4>Fingerprint des oeffentlichen Schluessels: </h4>

SHA 256 Fingerprint: 
<p style="font-size:10px;">2E:75:CD:B2:E6:4E:A7:95:8B:A4:38:70:2A:3E:1C:C5:03:16:E0:0F:65:E3:DF:E3:CE:D4:5B:58:44:C1:F3:02
</p>

SHA 1 Fingerprint: 
<p style="font-size:10px;">24:71:5E:A6:54:84:A6:77:00:50:A1:66:E7:FC:49:17:EB:32:30:C9 

 

<h4>Certificate Policy: </h4>

URL:  <a href="policies/root_ca_policy.html"> Policy </a>

<h4>Certificate Revocation List (crl): </h4>

URL:  <a href="certs/crl/ca.crl.pem"> root ca crl </a>

<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
			

<div id="Ttitle"><h2>Wurzelzertifizierungsstelle: "FV Root CA"</h2></div>
</div>

</body>
</html>

EOD;

?>
