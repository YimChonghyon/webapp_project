window.onload = function() {
	new Ajax.Request("tag_json.php",{
		method : "get",
		onSuccess : tag_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
}

function tag_JSON(ajax){
	var data = JSON.parse(ajax.responseText);
	$('tagselector').descendants().each(function(element){element.remove();});
	for (var i = 0; i < data.tags.length; i++) {
		var label = document.createElement('label');
		label.className = 'taglabel';

		var tagbutton = document.createElement('input');
		tagbutton.type = "checkbox";
		tagbutton.name = 'tags[]';
		tagbutton.value = data.tags[i];
		label.appendChild(tagbutton);
		label.innerHTML += data.tags[i];
		$('tagselector').appendChild(label);
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

function Close() {
	self.close();
}