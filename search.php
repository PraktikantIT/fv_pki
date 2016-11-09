
<?php


echo <<<EOD


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="Frankfurter Verein" />
<meta name="description" content="Frankfurter Verein" />
<title>Frankfurter Verein - IT - Digitaler Zertfizierungsdienst</title>
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


<div id="Zsearch">
<form action="" method ="POST">
	<input id="query2" type="text" name="query" value="Zertifikats Suche">
	<input type="submit" value="Suchen">
</form>		   
</div>


EOD;








//get post variables

//Check: #decide wether we got an email adress or something which we assume to be a cn
$check_for_at_sign=strpos($_POST["query"],"@");
if ( $check_for_at_sign !== false ) {
//ifdbug echo "we found an @ ";
//email
$post_email=$_POST["query"];

} else {
//ifdebug echo "we found no @, assuming cn";

//check: wether cn consists of at least two elements
$check_for_words=str_word_count($_POST["query"]);
if ($check_for_words > 1 ){
//common name
$post_cn=$_POST["query"];
} else {
echo "<br>Bitte Vor- und Nachnamen oder E-Mail Adresse angeben.";
}

}

//load database configuration
include_once("conf/config.inc");

//#debug test
//$post_cn="Foo Bar";
//$post_email="foo.bar@example.com";

//sanitize post input:

//filter common name
$cn = filter_var($post_cn, FILTER_SANITIZE_STRING);

//filter email address
$email = filter_var($post_email, FILTER_SANITIZE_EMAIL);

//#http output: query
//#echo "suche nach Zertifikat fuer: ";
//#echo "Person $cn ";
//#echo "oder Email-Adresse: $email";
//#echo "<br>\n";


//connecto to db
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");

//prepare exact match of either cn or email
$stmt = $pdo->prepare('SELECT * FROM certificate_list WHERE cn=:cn or email=:email');

 
/** 
if (strlen($cn) > 0) {
$stmt = $pdo->prepare('SELECT * FROM certificate_list WHERE cn=:cn');
} elseif (strlen($email) > 0) {
$stmt = $pdo->prepare('SELECT * FROM certificate_list WHERE email=:email');
} else  {
//nul statement
$stmt = $pdo->prepare('SELECT none FROM certificate_list ');
}
**/



// bind the parameters
$stmt->bindValue(":cn", "$cn");
$stmt->bindValue(":email", "$email");

// initialise an array for the results 
$results = array();

//run the query and map results
if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $results[] = $row;
    }
} else { 
echo "no results from query";
}


//close connection
$stmt->closeCursor();  
$stmt = null;  
$pdo = null;

//http output

echo "suche nach Zertifikat fuer: ";
echo "Person $cn ";
echo "oder Email-Adresse: $email";
echo "<br><br>\n";

echo "<h4>Ergebnis: </h4>";
//print_r($results);
foreach ($results as $result) {
	$cn=$result[cn];
	$email=$result[email];
	$certificate_der_file=$result[certificate_der_file];
	
	//html 
	echo "<div>Name (cn): $cn <br> E-Mail Adresse (email): $email  <br> Zertifikat (DER Format): <a href=\"/certs/der/$certificate_der_file\"> importieren </a> <br></div>";
};




echo <<<EOD
<div id="footh">

EOD;


include ("menu/foothmenu.php");


echo <<<EOD

</div>
				
</div>	
			

<div id="Ttitle"><h2>Suche nach Zertifikaten</h2></div>
</div>
</body>
</html>



EOD;

?>
