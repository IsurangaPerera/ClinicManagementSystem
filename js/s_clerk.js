
var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlHttp;
	// if running Internet Explorer 6 or older
	if(window.ActiveXObject){

		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e) {
			xmlHttp = false;
		}
	}
	// if running Mozilla or other browsers
	else{
		try {
			xmlHttp = new XMLHttpRequest();
		}
		catch (e) {
			xmlHttp = false;
		}
	}

	if (!xmlHttp)
		alert("Error creating the XMLHttpRequest object.");
	else
		return xmlHttp;
}

function process(){
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0){	
		id = encodeURIComponent(
		document.getElementById("patient_no").value);
		xmlHttp.open("GET", "patient/sputum/" + id, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	
	} else
		setTimeout('process()', 1000);
}

function handleServerResponse(){
	// move forward only if the transaction has completed
	if (xmlHttp.readyState == 4){
		// status of 200 indicates the transaction completed
		//successfully
		if (xmlHttp.status == 200){	
			// extract the XML retrieved from the server
			xmlResponse = xmlHttp.responseXML;
			// obtain the document element (the root element) of the XML
			//structure
			xmlDocumentElement = xmlResponse.documentElement;
			// get the text message, which is in the first child of
			// the the document element
			helloMessage = xmlDocumentElement.firstChild.data;

			setTimeout('process()', 1000);
		}
		// a HTTP status different than 200 signals an error
		else{
			alert("There was a problem accessing the server: " +
			xmlHttp.statusText);
		}
	}
}
