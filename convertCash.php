<!DOCTYPE html>
<html>
<title>แปลงสกุลเงิน</title>

<h2>แปลงสกุลเงิน</</h2>
<p>
  <label>จำนวน:</label>
  <input type="number" id="txtnum">
  <label>บาท</label> 
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucConverter();">

<script>
	function fucConverter(){
    
    var temp = document.getElementById("txtnum").value;
    var res = parseInt(temp) * 38.01;
    str_ = res + " วอน";    
     document.getElementById("txtResult").innerHTML= str_;
    
    }
</script>
<body>
</body>
</html>
