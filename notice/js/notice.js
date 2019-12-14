window.onload = function(){
	var contents = $$('.table_contents');
	for (var i = 0; i < contents.length; i++) {
		contents[i].style.display = 'none';
	}
	var out = $$('.table_out');
	out.each(function(element){element.observe("click",UROPADIV)});
}

function UROPADIV(){
	var Link = $("content_"+this.id);
	if(Link.style.display == '')
		Link.style.display = 'none';
	else
		Link.style.display = '';

}
function SirenFunction(idMyDiv){
	var objDiv = document.getElementById(idMyDiv);
	if(objDiv.style.display=="block"){ objDiv.style.display = "none"; }
	else{ objDiv.style.display = "block"; }
}