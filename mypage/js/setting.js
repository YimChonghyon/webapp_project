window.onload = function(){
	Button_Tree('START','none');
}
function Button_Tree(Div,Button) {
	document.getElementById("START").style.display = 'none';
	for(var i=1;i<=8;i++){
		document.getElementById("SETDIV"+i).style.display = 'none';
		document.getElementById("B"+i).style.backgroundColor = '#D8BFD8';
	}
	if(Div != 'START')
	document.getElementById(Button).style.backgroundColor = '#EE82EE';
	document.getElementById(Div).style.display = "block";
}