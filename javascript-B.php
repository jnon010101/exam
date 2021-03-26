<input type="text" id="name">
<br>
<input type="text" id="dob">
<br>
<input type="radio" id="gender" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="gender" name="gender" value="female">
<label for="female">Female</label><br>
<br>
<input type="checkbox" id="lang1" name="vehicle1" value="English">
  <label for="vehicle1"> English</label><br>
  <input type="checkbox" id="lang2" name="vehicle2" value="Japanese">
  <label for="vehicle2"> Japanese</label><br>
  <input type="checkbox" id="lang3" name="vehicle3" value="Chinese">
  <label for="vehicle3"> Chinese</label><br><br>
<br>
  <button onclick="dis()">VIEW</button>
<script type="text/javascript">
	function dis(){

var xx ='{"employees":['+'{"id":"1","firstName":"John","lastName":"Doe",'+
'"birthday":"1990-05-07","gender":{"male":true,"female":false},'+
'"knownLanguage":["English","Japanese","Chinese"]},'+
'{"id":"2","firstName":"Lina","lastName":"Art","birthday":"1994-08-05","'+
'gender":{"male":false,"female":true},"knownLanguage":["English","Japanese"]}]}';
	obj = JSON.parse(xx);
     // console.log(obj);
     document.getElementById("name").value= obj.employees[0].firstName+" "+obj.employees[0].lastName;
      document.getElementById("dob").value= obj.employees[0].birthday;
      document.getElementById("gender").checked = obj.employees[0].gender;
      document.getElementById("lang1").checked = obj.employees[0].knownLanguage[0];
      document.getElementById("lang2").checked = obj.employees[0].knownLanguage[1];
      document.getElementById("lang3").checked = obj.employees[0].knownLanguage[2];	
	}
</script>