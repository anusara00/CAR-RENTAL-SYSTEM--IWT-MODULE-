
 function mazda(){
	 
	document.getElementById("img1").src="../images/car13.png";
	 
	 
	var car =["Engine Capacity : 1300cc","Transmission : Automatic ","Fuel Type : Petrol","Seating Capacity : 5" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }



 function porsche(){
	 
	 document.getElementById("img1").src="../images/car12.jpg";
	 
	 
	var car =["Engine Capacity :1300cc","Transmission : Automatic","Seating Capacity : 5","Fuel Type : Diesel","Engine Type : Gas" ];
	 
	var i;
	var length = car.length;
	var txt = "";
	for(i=0; i<length; i++){
		
		txt+=car[i] + "<br/>";
		
	}
	document.getElementById("para").innerHTML= txt;
 }