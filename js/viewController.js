var text="Home";

function menuControler(button){
	var x;
	x=document.getElementById(button+"CL");
	x.innerHTML=text;
	text=button;
}
