 
 function allion(){
	 
	document.getElementById("img1").src="../images/car16.jpg";
	 
	 
	var car =["Maximum Power : 109-158ps","Drive Type : AWD/FF","Engine Capacity : 1496-1998CC","Fuel Type = Diesel","Seating Capaxity : 5" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }



 function benz(){
	 
	 document.getElementById("img1").src="../images/car24.jpg";
	 
	 
	var car =["Engine Type : L6 Diesel Engine","Engine Capacity : 2925cc ","Fuel Type : Diesel","Transmission : Automatic","Drive Type : RWD","Seating Capacity : 5 "];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }