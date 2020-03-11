<html>
<title>แปลงเงินเยน</title>
<body>
<input type="text" name="THB" id="THB1"/>

<div id="resulT"></div>
<input type="submit" value="Submit" onclick="funcCon();">
<script>
function funcCon(){
	var thai_ = document.getElementById("THB1").value;
	var result = thai_ *0.303;
	document.getElementById("resulT").innerHTML= result;
}
</script>

