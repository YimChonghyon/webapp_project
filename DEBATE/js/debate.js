window.onload = function() {
	new Ajax.Request("query_json.php",{
		method : "get",
		onSuccess : query_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
	new Ajax.Request("tag_json.php",{
		method : "get",
		onSuccess : tag_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
	$('anonymous_button').checked = true;
	$('reply_id').disabled = true;
	$('reply_button').disabled = true;
	$('reply_id').value = 'anonymous';
	$('anonymous_button').observe('click', checking_anonymous_button);
}
var idmemory = "";
function checking_anonymous_button() {
	//익명 체크 버튼 체크 상태에 따라 ID 입력칸 비활성화
	if(this.checked == true){
		$('reply_id').disabled = true;
		idmemory = $('reply_id').value;
		$('reply_id').value = 'anonymous';
	}
	else{
		$('reply_id').disabled = false;
		$('reply_id').value = idmemory;
	}
}

function check_reply_blank() {
	//댓글 작성시 포맷을 제대로 작성했는지 검사
	if($('reply_debate_id').value == 0){
		alert('게시글을 선택해 주세요.');
		return false;
	}

	if($('anonymous_button').checked == false && !$('reply_id').value){
		alert('아이디를 입력해 주세요.');
		return false;
	}

	if(!$('reply_password').value){
		alert('비밀번호를 입력해 주세요.');
		return false;
	}

	if(!$('reply_content').value){
		alert('댓글을 입력해 주세요.');
		return false;
	}

	return true;
}

var querys;
function query_JSON(ajax) {
	querys = ajax.responseText;
	var data = JSON.parse(querys);
	$('query_list').descendants().each(function(element){element.remove();});
	for(var i=0;i<data.debates.length;i++) {
		var debate_content_container = document.createElement('div');
		debate_content_container.className = 'debate_content_container';
		debate_content_container.id = i;
		debate_content_container.observe('click',query_select);
		$('query_list').appendChild(debate_content_container);

		var title_tag = document.createElement('div');
		title_tag.className = 'title_tag';
		debate_content_container.appendChild(title_tag);

		var tag_number = document.createElement('div');
		tag_number.className = 'tag_number';
		tag_number.innerHTML = data.debates[i].number;
		title_tag.appendChild(tag_number);
		var tag_catagory = document.createElement('div');
		tag_catagory.className = 'tag_catagory';	
		for (var j = 0; j < data.debates[i].tags.length; j++) {
			tag_catagory.innerHTML += '#' + data.debates[i].tags[j]+ " ";
		}
		title_tag.appendChild(tag_catagory);


		var titlebox = document.createElement('div');
		titlebox.className = 'titlebox';
		title_tag.appendChild(titlebox);
		var title_text = document.createElement('div');
		title_text.className = 'title_text';
		titlebox.innerHTML = data.debates[i].title;
		titlebox.appendChild(title_text);

		var bottom_infor = document.createElement('div');
		bottom_infor.className = 'bottom_infor';
		title_tag.appendChild(bottom_infor);
		var write_infor = document.createElement('div');
		write_infor.className = 'write_infor';
		bottom_infor.appendChild(write_infor);		
		var name = document.createElement('div');
		name.className = 'name';
		name.innerHTML = data.debates[i].name;
		write_infor.appendChild(name);		
		var time = document.createElement('div');
		time.className = 'time';
		time.innerHTML = data.debates[i].date;
		write_infor.appendChild(time);

		var icon_container = document.createElement('div');
		icon_container.className = 'icon_container pull-right';
		bottom_infor.appendChild(icon_container);
		var question_container = document.createElement('div');
		question_container.className = 'question_container';
		icon_container.appendChild(question_container);
		var question_icon = document.createElement('img');
		question_icon.className = 'question_icon';
		question_icon.src = '../resource/images/question.png';
		question_container.appendChild(question_icon);
		var question_icon_num = document.createElement('div');
		question_icon_num.className = 'question_icon_num';
		question_icon_num.innerHTML = data.debates[i].wanted;
		question_container.appendChild(question_icon_num);
		var comment_container = document.createElement('div');
		comment_container.className = 'comment_container';
		icon_container.appendChild(comment_container);
		var comment_icon = document.createElement('img');
		comment_icon.className = 'comment_icon';
		comment_icon.src = '../resource/images/comment.png';
		comment_container.appendChild(comment_icon);		
		var comment_icon_num = document.createElement('div');
		comment_icon_num.className = 'comment_icon_num';
		comment_icon_num.innerHTML = data.debates[i].replys.length;
		comment_container.appendChild(comment_icon_num);
	}
}

function query_select() {
	var data = JSON.parse(querys);
	$('reply_button').disabled = false;
	$('reply_debate_id').value = data.debates[this.id].number;
	//내용 갱신
	$('main_number').innerHTML = '#' + data.debates[this.id].number;
	$('main_tag').innerHTML = "";
	for (var j = 0; j < data.debates[this.id].tags.length; j++) {
		$('main_tag').innerHTML += '#' + data.debates[this.id].tags[j]+ " ";
	}
	$('main_title').innerHTML = data.debates[this.id].title;
	$('main_content').innerHTML = data.debates[this.id].content;
	$("main_question").innerHTML = data.debates[this.id].wanted;

	$('debate_option_list').setAttribute("onsubmit",'return dropdebate(' + data.debates[this.id].password + ');');
	$('questions').setAttribute("onclick",'addquestions(' + data.debates[this.id].number + ');');
	$('debate_option_id').value = data.debates[this.id].number;
	//댓글 초기화
	$('reply_container').descendants().each(function(element){element.remove();});
	for (var i = 0; i < data.debates[this.id].replys.length; i++) {
		var comment_container = document.createElement('div');
		comment_container.className = 'comment_container';

		var commentbox = document.createElement('div');
		commentbox.className = 'commentbox';

		var name = document.createElement('div');
		name.className = 'name';
		name.innerHTML = data.debates[this.id].replys[i].name;

		var comment_contents_box = document.createElement('div');
		comment_contents_box.className = 'comment_contents_box';

		var comment = document.createElement('div');
		comment.className = 'comment';

		var comment_text = document.createElement('div');
		comment_text.className = 'comment_text';
		comment_text.innerHTML = data.debates[this.id].replys[i].content;

		var comment_additional = document.createElement('div');
		comment_additional.className = 'comment_additional';

		var comment_time = document.createElement('div');
		comment_time.className = 'comment_time';
		comment_time.innerHTML = data.debates[this.id].replys[i].date;

		var heart = document.createElement('div');
		heart.className = 'heart';

		var replyform = document.createElement('form');
		replyform.method = 'POST';

		var button = document.createElement('button');
		button.className = 'button';

		var heart_button = document.createElement('img');
		heart_button.className = 'heart_button';
		heart_button.src = '../resource/images/hearts.png';

		var heart_num = document.createElement('div');
		heart_num.className = 'heart_num';
		heart_num.innerHTML = data.debates[this.id].replys[i].like;


		//adding reply
		button.appendChild(heart_button);
		replyform.appendChild(button);
		heart.appendChild(replyform);
		heart.appendChild(heart_num);
		comment_additional.appendChild(comment_time);
		comment_additional.appendChild(heart);
		comment.appendChild(comment_text);
		comment_contents_box.appendChild(comment);
		comment_contents_box.appendChild(comment_additional);
		commentbox.appendChild(name);
		commentbox.appendChild(comment_contents_box);
		comment_container.appendChild(commentbox);
		$('reply_container').appendChild(comment_container);
		// $('reply_container').appendChild(comment_container);
		// $('reply_container').appendChild(commentbox);
	}
}

function tag_JSON(ajax) {
	var data = JSON.parse(ajax.responseText);
	$('TEL_tag').descendants().each(function(element){element.remove();});
	for (var i = 0; i < data.tags.length; i++) {	
		var option = document.createElement('option');
		option.innerHTML = data.tags[i];
		$('TEL_tag').appendChild(option);
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

function showPopup() {
	var url = "question.html";
	var name = "question";
	var option = "width=900, height=550, left= 100, top = 50";
	window.open(url, name, option);
}

function searchtag() {
	var Selected = $('tag_selecter');
	var TAG = new Array();
	var j = 0;
	for (var i = 0; i < Selected.length; i++) {
		if(Selected[i].selected)
			TAG[j++] = Selected.options[i].value;
	}
	new Ajax.Request("query_json.php",{
		method : "get",
		parameters : { 'selectedTag[]':TAG },
		onSuccess : query_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
}

function dropdebate(password) {
	var pw = prompt("PASSWORD? :");
	if(pw != password)
		alert('Wrong password!');
	return pw == password
}

function searching() {
	var word = $('searchbox').value;
	new Ajax.Request("query_json.php",{
		method : "get",
		parameters : { 'TT':word },
		onSuccess : query_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
}

function addquestions(number) {
	alert('저도 궁금합니다!');
	new Ajax.Request("addquestion.php",{
		method : "get",
		parameters : { 'IND':number }
	});
	location.reload();
}