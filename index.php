<!DOCTYPE html>
<html>
<title>แปลงอุณหภูมิ</title>
<body>

<h2>แปลงอุณหภูมิ</</h2>
<p>
  <label>* Temperature:</label>
  <input type="number" id="txttemp">
  <select id="typetemp">
  <option value="Fahrenheit">Fahrenheit</option>
  <option value="Celcius">Celcius</option>
  <option value="Rankine">Rankine</option>
  <option value="Kelvin">Kelvin</option>
</select>  
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucConverter();">

<script>
	function fucConverter(){
    var temp = document.getElementById("txttemp").value;
    var type = document.getElementById("typetemp");
    var typetemp = type.options[type.selectedIndex].value;
    var str_ ="";
    var convCelcius,convRankine,convKelvin,convFahrenheit;
    if(typetemp == "Fahrenheit"){
     convCelcius = (temp - 32)/1.8;
     convRankine = (temp - 32)+ 491.67;
     convKelvin =  ((temp - 32)/1.8) +273.15;
      str_ = convCelcius.toFixed(2) + "Celcius <p>" + convRankine.toFixed(2)+ "Rankine <p>" + convKelvin.toFixed(2) + "Rankine";
    }else if (typetemp == "Celcius"){ 
     convRankine = (temp * 1.8) + 491.67;
     convKelvin = parseInt(temp) + 273.15;
     convFahrenheit = (temp * 1.8)+ 32;
    str_ = convFahrenheit.toFixed(2) + "Fahrenheit <p>" + convRankine.toFixed(2)+ "Rankine <p>" + convKelvin.toFixed(2) + "Rankine";
    }
   
     //ert(typetemp + str_);
     document.getElementById("txtResult").innerHTML= str_;
    
    }
</script>

</body>
</html>


