
<!DOCTYPE html>
<html>
<title>แปลงสกุลเงิน</title>

<h2>แปลงสกุลเงิน</</h2>
<p>
<h5>แปลงสกุลเงินวอน</h5> 
<script>
	function fucConverter(){
    
    var temp = document.getElementById("txtnum").value;
    var res = parseInt(temp) * 38.01;
    str_ = res + " วอน";    
     document.getElementById("txtResult").innerHTML= str_;
    
    }
  function funcCon(){
	var thai_ = document.getElementById("THB1").value;
	var result = thai_ *0.303;
	document.getElementById("resulT").innerHTML= result;
}
</script>
 <h5>แปลงสกุลเงินเยน</h5>  
 
<body>  
  <label>จำนวน:</label>
<input type="text" name="THB" id="THB1"/>
 <label>บาท</label> 
<div id="resulT"></div>
<input type="submit" value="Submit" onclick="funcCon();">
   <label>จำนวน:</label>
  <input type="number" id="txtnum">
  <label>บาท</label> 
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucConverter();">
</body>
</html>

