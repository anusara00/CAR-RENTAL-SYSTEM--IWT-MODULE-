 
 function lamboghini(){
	 
	document.getElementById("img1").src="../images/car19.jpg";
	 
	 
	var car =[" Engine Capacity : 6498cc","Transmission : Automatic ","Drive Type : AWD","Fuel Type : Diesel","Seating Capacity : 4" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }



 function volkswagen(){
	 
	 document.getElementById("img1").src="../images/car26.jpg";
	 
	 
	var car =["Engine Capacity : 999cc","Transmission : Automatic ","Fuel Type : Petrol"," Seating Capacity : 5"];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }