window.onload = function(){
	Button_Tree('START','none');
}
function Button_Tree(Div,Button) {
	var division = document.getElementsByClassName('VIEWPOINT');
	var button = document.getElementsByClassName('B');
	for(var i=0;i<division.length;i++){
		division[i].style.display = 'none';
	}
	for(var i=0;i<button.length;i++){
		button[i].style.backgroundColor = '#D8BFD8';
	}
	if(Div != 'START')
		document.getElementById(Button).style.backgroundColor = '#EE82EE';
	document.getElementById(Div).style.display = "block";
}