 
 function hybrid(){
	 
	document.getElementById("img1").src="../images/car21.jpg";
	 
	 
	var car =[" Engine Capacity : 999cc","Transmission : Automatic ","Seating Capacity : 5","Fuel Type : Diesel","Body Style :Sport Utility" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }



 function ford(){
	 
	 document.getElementById("img1").src="../images/car15.jpg";
	 
	 
	var car =[" Engine Capacity : 2498cc","Transmission : Automatic ","Seating Capacity : 5","Fuel Type : Diesel","Engine Type :Gas" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }









	  
