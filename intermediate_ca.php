
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


include ("menu/conf/site.inc");
echo <<<EOD

</div>		
<div id="content">		   


<h3>Administrativer Ansprechpartner : $SITE_PREFIX</h3>
<ul>
<li> CA - Verwaltung: pki@frankfurter-verein.de
</ul>


<h3> Zertifikate: $SITE_PREFIX Intermediate CA </h3>



<h4 >DER Format:   <svg  id="der2" width="18" height="18" viewBox="0 0 44 44" enable-background="new 0 0 44 44">
  <path d="M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0z M15.3,18.3l1.4-1.4c0.2-0.2,0.4-0.3,0.7-0.3  c0.3,0,0.5,0.1,0.7,0.3l1,1c0.3,0.3,0.9,0.1,0.9-0.4V11c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v6.6c0,0.4,0.5,0.7,0.9,0.4l1-1  c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0.1,0.7,0.3l1.4,1.4c0.2,0.2,0.3,0.4,0.3,0.7s-0.1,0.5-0.3,0.7l-6,6c-0.2,0.2-0.5,0.3-0.7,0.3  s-0.5-0.1-0.7-0.3l-6-6c-0.2-0.2-0.3-0.4-0.3-0.7C15,18.7,15.1,18.5,15.3,18.3z M35,33c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1v-6  c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v2.5c0,0.3,0.2,0.5,0.5,0.5h17c0.3,0,0.5-0.2,0.5-0.5V27c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1V33z"/>
</svg> </h4>

<h4>PEM Format:     <svg id="pem2"  width="18" height="18" viewBox="0 0 44 44" enable-background="new 0 0 44 44">
  <path d="M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0z M15.3,18.3l1.4-1.4c0.2-0.2,0.4-0.3,0.7-0.3  c0.3,0,0.5,0.1,0.7,0.3l1,1c0.3,0.3,0.9,0.1,0.9-0.4V11c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v6.6c0,0.4,0.5,0.7,0.9,0.4l1-1  c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0.1,0.7,0.3l1.4,1.4c0.2,0.2,0.3,0.4,0.3,0.7s-0.1,0.5-0.3,0.7l-6,6c-0.2,0.2-0.5,0.3-0.7,0.3  s-0.5-0.1-0.7-0.3l-6-6c-0.2-0.2-0.3-0.4-0.3-0.7C15,18.7,15.1,18.5,15.3,18.3z M35,33c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1v-6  c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v2.5c0,0.3,0.2,0.5,0.5,0.5h17c0.3,0,0.5-0.2,0.5-0.5V27c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1V33z"/>
</svg> </h4>

<br>


<h4>Fingerprint:</h4>
<p style="font-size:9px;">
SHA256 Fingerprint= =40:3D:38:4E:40:25:D9:63:21:35:2A:14:1E:0F:46:1D:3F:03:49:93:D3:2C:1D:36:BC:5A:91:48:39:59:98:F5
</p>

<p style="font-size:9px;">
SHA1 Fingerprint= 3B:B2:5D:76:B3:BF:60:60:2B:43:03:6B:51:0D:E2:9C:4F:DE:3E:36
</p>

<h4>Policy: </h4>

URL:  <a href="intermediate_ca_policy.html"> Policy </a>

<h5>Certificate Revocation List (crl): </h5>

URL:  <a href="certs/crl/intermediate_ca.crl.pem"> intermediate ca crl </a>


<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
					

<div id="Ttitle"><h2>Zwischenzertifizierungsstelle: "FV Intermediate CA"</h2></div>

</div>

</body>
</html>

EOD;

?>
