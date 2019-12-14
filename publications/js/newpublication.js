window.onload = function() {
	new Ajax.Request("publications_category_json.php",{
		method : "get",
		onSuccess : category_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
}
function category_JSON(ajax){
    $('category').descendants().each(function(element){element.remove();});
    var data = JSON.parse(ajax.responseText);
    for(var i=0;i<data.categorys.length;i++) {
    	var option = document.createElement('option');
    	option.innerHTML = data.categorys[i];
    	option.value = data.categorys[i];
    	$('category').appendChild(option);
    }
}

function ajaxFailed(ajax, exception) {
	var errorMessage = "Error making Ajax request:\n\n";
	if (exception) {
		errorMessage += "Exception: " + exception.message;
	} else {
		errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText +
		"\n\nServer response text:\n" + ajax.responseText;
	}
	alert(errorMessage);
}