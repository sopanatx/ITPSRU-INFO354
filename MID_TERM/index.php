<!DOCTYPE html>
<html>

<style>
body {
  font-family: 'Sarabun', sans-serif;
}
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td,button {
  padding: 5px;
  font-family: 'Sarabun', sans-serif;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แสดงผล XML </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
</head>
<body>
<button type="button" class="btn btn-danger" onclick="loadXMLDoc()">แสดงผล</button>

<br><br>
<table id="demo" class="table table-striped table-hover" ></table>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "6112224060.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>ชื่อจริง</th><th>นามสกุล</th><th>สาขา</th><th>กลุ่มเรียน</th><th>ความสนใจ</th><th>กรุ๊ปเลือด</th><th>หัวข้อโปรเจค</th><th>อาจารย์ที่ปรึกษา</th></tr>";
  var x = xmlDoc.getElementsByTagName("Profile");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("FirstName")[0].childNodes[0].nodeValue +
    "</td><td>" + 
    "Hi~~~~~ Todo this by your self......." +
    "</td><td>" +
    x[i].getElementsByTagName("Major")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Group")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Attention")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("BloodGroup")[0].childNodes[0].nodeValue +
    "</td><td>"  +
    x[i].getElementsByTagName("ProjectTopic")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Advisor")[0].childNodes[0].nodeValue +
    "</td></tr>"
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>
