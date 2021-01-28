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
<br><br>
<table id="demo" class="table table-striped table-hover" ></table>

<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    var table = "<tr><th>ชื่อจริง</th><th>นามสกุล</th><th>สาขา</th><th>กลุ่มเรียน</th><th>ความสนใจ</th><th>ความสามารถพิเศษ</th><th>กรุ๊ปเลือด</th><th>หัวข้อโปรเจค</th><th>อาจารย์ที่ปรึกษา</th></tr>";
    console.table(myArr.friendslist)
  
    for (let i = 0; i < myArr.friendslist.length; i++) {
      table += "<tr><td>" 
      + myArr.friendslist[i].FirstName +
      "</td><td>"
       + myArr.friendslist[i].LastName +
       "</td><td>" 
       +   myArr.friendslist[i].Major  +
       "</td><td>" 
       +   myArr.friendslist[i].Group  +
       "</td><td>" 
       +   myArr.friendslist[i].Attention  +
       "</td><td>"  
       +   myArr.friendslist[i].Talent  +
       "</td><td>" 
       +   myArr.friendslist[i].BloodGroup  +
       "</td><td>" 
       +   myArr.friendslist[i].ProjectTopic  +
       "</td><td>" +   
       myArr.friendslist[i].Advisor  +
       "</td><td>" 

    }
     document.getElementById("demo").innerHTML = table
  }
};
xmlhttp.open("GET", "friendslist.json", true);
xmlhttp.send();
</script>

<p>Take a look at <a href="friendslist.json" target="_blank">friendslist.json</a></p>

</body>
</html>
