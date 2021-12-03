
 function audi(){
	 
	document.getElementById("img1").src="../images/c3.jpg";
	 
	 
	var car =["Engine Capacity : 1300cc","Transmission : Automatic ","Fuel Type : Petrol","Seating Capacity : 5"," Engine Type: Gas"," Air Condition : Yes"];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }



 function bmw(){
	 
	 document.getElementById("img1").src="../images/c2.jpg";
	 
	 
	var car =["Engine Capacity :1300cc","Transmission : Automatic","Seating Capacity : 5","Fuel Type : Diesel","Engine Type : Gas" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }
 
















