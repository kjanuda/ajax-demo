var xmlHttp = createXmlHttpRequest();

function createXmlHttpRequest() {
    var xmlHttp;
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xmlHttp = false;
        }
    } else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }
    if (!xmlHttp) {
        alert("Error creating XMLHttpRequest object.");
    } else {
        return xmlHttp;
    }
}

function process() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
        var name = encodeURIComponent(document.getElementById("username").value);
        xmlHttp.open("GET", "ajax.php?name=" + name, true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    } else {
        setTimeout(process, 1000);
    }
}

function handleServerResponse() {
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            var xmlResponse = xmlHttp.responseXML;
            var xmlDocumentElement = xmlResponse.documentElement;
            var helloMessage = xmlDocumentElement.firstChild.data;

            document.getElementById("message").innerHTML = '<strong>' +
                helloMessage + '</strong>';

            setTimeout(process, 1000);
        } else {
            alert("There was a problem in the server." + xmlHttp.statusText);
        }
    }
}