
	
	function clearSearchValue2 () {
	   var s2 = document.getElementById("query2"); s2.value= ""; 
	}


	function  addEventforSearch() { 
		addDownLink();
		var su2=document.getElementById("query2");
		if(su2!=null){
			su2.addEventListener("click" , clearSearchValue2);
		};
		
	};
	
	


	function rootCaDer () {
	   window.location ="http://pki.frankfurter-verein.de/certs/der/ca.cert.der";
	}
	
	
 
	function rootCaPem () {
	   window.location ="http://pki.frankfurter-verein.de/certs/pem/ca.cert.pem";
	}
	

	function intermediateDer () { 
	   window.location ="http://pki.frankfurter-verein.de/certs/der/intermediate.cert.der";
	}
	
	
 
	function intermediatePem () {
	   window.location ="http://pki.frankfurter-verein.de/certs/pem/ca.cert.pem";
	}
	
	
	function  addDownLink() { 
		
		var der=document.getElementById("der");
        if (der!=null){
			der.addEventListener("click" , rootCaDer);
		}
		
		var pem=document.getElementById("pem");
        if (der!=null){
			pem.addEventListener("click" , rootCaPem);
		}
		var der2=document.getElementById("der2");
		if (der2!=null){
			der2.addEventListener("click" , intermediateDer);
		}
		var pem2=document.getElementById("pem2");
		if (der!=null){
			pem2.addEventListener("click" , intermediatePem);
		}
	};
		


	window.onload = addEventforSearch;
