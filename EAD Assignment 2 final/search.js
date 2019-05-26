
function searchXML() {

  var term = document.getElementById('srch').value;

  size = term.length;
    if (size == null || size == ""){

        return false;
    }
  addHitToDIV(term);

}

function loadXMLDoc(dname)
{
    if (window.XMLHttpRequest)
    {
        xhttp=new XMLHttpRequest();
    }
    else
    {
        xhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.open("GET",dname,false);
    xhttp.send();
    return xhttp.responseXML;
}

function addHitToDIV(term) {
    size = term.length;

    table="";
    xmlDoc=loadXMLDoc("employee1.xml");
    x = xmlDoc.getElementsByTagName("firstname");
    for (i = 0; i < x.length; i++) {
      fString = xmlDoc.getElementsByTagName("firstname")[i].childNodes[0].nodeValue;
      lString = xmlDoc.getElementsByTagName("lastname")[i].childNodes[0].nodeValue;
    if (fString.toLowerCase() == term.toLowerCase()) {
      table += "<table border =\"1\"><tr><th>id</th><th>firstname</th><th>Lastname</th><th>Email ID</th></tr>"+
      "<tr><td>" + xmlDoc.getElementsByTagName("id")[i].childNodes[0].nodeValue +
      "</td><td>" +
      xmlDoc.getElementsByTagName("email")[i].childNodes[0].nodeValue +
      "</td><td>" +
      xmlDoc.getElementsByTagName("lastname")[i].childNodes[0].nodeValue +
      "</td><td>" +
      xmlDoc.getElementsByTagName("firstname")[i].childNodes[0].nodeValue +
      "</td></tr> </table>";
      break;
    } else if (lString.toLowerCase() == term.toLowerCase()) {
      table += "<table border =\"1\"><tr><th>id</th><th>firstname</th><th>Lastname</th><th>Email ID</th></tr>" +
      "<tr><td>"+ xmlDoc.getElementsByTagName("id")[i].childNodes[0].nodeValue + "</td><td>" + xmlDoc.getElementsByTagName("email")[i].childNodes[0].nodeValue + "</td><td>" +
      xmlDoc.getElementsByTagName("lastname")[i].childNodes[0].nodeValue +
      "</td><td>" +
      xmlDoc.getElementsByTagName("firstname")[i].childNodes[0].nodeValue +
      "</td></tr> </table>";
      break;
    }
  }
    document.getElementById("results").innerHTML = table;
}
