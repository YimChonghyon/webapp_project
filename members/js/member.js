window.onload = function(){
	Button_Tree('START','none');
}

function Button_Tree(Div,Button) {
	var division = document.getElementsByClassName('mainbody');
	var button = document.getElementsByClassName('MEMBERS_BUTTON');
	for(var i=0;i<division.length;i++){
		division[i].style.display = 'none';
	}
	for(var i=0;i<button.length;i++){
		button[i].style.backgroundColor = 'white';
	}
	if(Div != 'START') {
		document.getElementById(Button).style.backgroundColor = '#D21593';
		document.getElementById(Div).style.display = "block";
	}
}
