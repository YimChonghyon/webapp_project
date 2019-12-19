window.onload = function() {
	new Ajax.Request("tag_json.php",{
		method : "get",
		onSuccess : tag_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
	$('debate_anonymous').checked = true;
	$('debate_name').disabled = true;
	$('debate_name').value = 'anonymous';
	$('debate_anonymous').observe('click', checking_anonymous_button);
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

function textareaAutoHeight(el) {
	setTimeout(() => {
		el.style.height = 'auto';

		let scrollHeight = el.scrollHeight;
		let outlineHeight = el.offsetHeight - el.clientHeight;

		el.style.height = (scrollHeight + outlineHeight) + 'px';
	}, 0);
}

function showPopup() {
	var url = "question.html";
	var name = "question";
	var option = "width=900, height=550, left= 100, top = 50";
	window.open(url, name, option);
	
}
function Close() {
	self.close();
}

var idmemory = "";
function checking_anonymous_button() {
	//익명 체크 버튼 체크 상태에 따라 ID 입력칸 비활성화
	if(this.checked == true){
		$('debate_name').disabled = true;
		idmemory = $('debate_name').value;
		$('debate_name').value = 'anonymous';
	}
	else{
		$('debate_name').disabled = false;
		$('debate_name').value = idmemory;
	}
}

function check_debate_blank() {
	//질문 작성시 포맷을 제대로 작성했는지 검사

	if($('debate_anonymous').checked == false && !$('debate_name').value){
		alert('아이디를 입력해 주세요.');
		return false;
	}

	if(!$('debate_password').value){
		alert('비밀번호를 입력해 주세요.');
		return false;
	}

	if(!$('debate_content').value){
		alert('댓글을 입력해 주세요.');
		return false;
	}

	return true;
}
